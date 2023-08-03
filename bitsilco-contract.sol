// SPDX-License-Identifier: MIT
pragma solidity ^0.8.9;

import "@openzeppelin/contracts@4.9.3/token/ERC20/ERC20.sol";
import "@openzeppelin/contracts@4.9.3/token/ERC20/extensions/ERC20Burnable.sol";
import "@openzeppelin/contracts@4.9.3/token/ERC20/extensions/ERC20Snapshot.sol";
import "@openzeppelin/contracts@4.9.3/access/Ownable.sol";
import "@openzeppelin/contracts@4.9.3/security/Pausable.sol";
import "@openzeppelin/contracts@4.9.3/token/ERC20/extensions/draft-ERC20Permit.sol";
import "@openzeppelin/contracts@4.9.3/token/ERC20/extensions/ERC20Votes.sol";
import "@openzeppelin/contracts@4.9.3/token/ERC20/extensions/ERC20FlashMint.sol";
import "@openzeppelin/contracts@4.9.3/utils/math/SafeMath.sol";

/// @custom:security-contact info@bitsilco.com
contract BitSilco is ERC20, ERC20Burnable, ERC20Snapshot, Ownable, Pausable, ERC20Permit, ERC20Votes, ERC20FlashMint {
    using SafeMath for uint256;

    struct Stake {
        uint256 amount;
        uint256 startTime;
        uint256 endTime;
    }

    mapping(address => Stake[]) private stakes;
    uint256 public stakingDuration = 30 days; // 30 days staking duration
    uint256 public presaleDuration = 45 days; // 45 days presale duration
    uint256 public presaleEndTime;

    constructor() ERC20("BitSilco", "BTSLC") ERC20Permit("BitSilco") {
        _mint(msg.sender, 350000000 * 10 ** decimals());
        presaleEndTime = block.timestamp.add(presaleDuration);
    }

    function snapshot() public onlyOwner {
        _snapshot();
    }

    function pause() public onlyOwner {
        _pause();
    }

    function unpause() public onlyOwner {
        _unpause();
    }

    function mint(address to, uint256 amount) public onlyOwner {
        _mint(to, amount);
    }

    function setStakingDuration(uint256 durationInDays) public onlyOwner {
        stakingDuration = durationInDays * 1 days;
    }

    function buyTokens() public payable {
        require(block.timestamp <= presaleEndTime, "Presale has ended");
        uint256 tokensToBuy = msg.value.mul(50); // 1 USDT = 50 BTSLC during presale
        _mint(msg.sender, tokensToBuy);
    }

    function sellTokens(uint256 amount) public {
        require(block.timestamp <= presaleEndTime, "Presale has ended");
        require(balanceOf(msg.sender) >= amount, "Insufficient balance");
        uint256 valueToReceive = amount.div(50); // 1 USDT = 50 BTSLC during presale
        _burn(msg.sender, amount);
        payable(msg.sender).transfer(valueToReceive);
    }

    function stake(uint256 amount) public {
        require(block.timestamp > presaleEndTime, "Presale is still active");
        require(amount > 0, "Amount must be greater than zero");
        require(balanceOf(msg.sender) >= amount, "Insufficient balance");

        _burn(msg.sender, amount);

        uint256 endTime = block.timestamp.add(stakingDuration);
        stakes[msg.sender].push(Stake(amount, block.timestamp, endTime));
    }

    function unstake(uint256 stakeIndex) public {
        require(stakeIndex < stakes[msg.sender].length, "Invalid stake index");
        Stake memory st = stakes[msg.sender][stakeIndex];
        require(block.timestamp >= st.endTime, "Stake not yet matured");

        _mint(msg.sender, st.amount);
        delete stakes[msg.sender][stakeIndex];
    }

    function getStakeCount(address account) public view returns (uint256) {
        return stakes[account].length;
    }

    function getStakeAtIndex(address account, uint256 index) public view returns (uint256 amount, uint256 startTime, uint256 endTime) {
        require(index < stakes[account].length, "Invalid stake index");
        Stake memory st = stakes[account][index];
        return (st.amount, st.startTime, st.endTime);
    }

    function _beforeTokenTransfer(address from, address to, uint256 amount)
        internal
        whenNotPaused
        override(ERC20, ERC20Snapshot)
    {
        super._beforeTokenTransfer(from, to, amount);
    }

    // The following functions are overrides required by Solidity.

    function _afterTokenTransfer(address from, address to, uint256 amount)
        internal
        override(ERC20, ERC20Votes)
    {
        super._afterTokenTransfer(from, to, amount);
    }

    function _mint(address to, uint256 amount)
        internal
        override(ERC20, ERC20Votes)
    {
        super._mint(to, amount);
    }

    function _burn(address account, uint256 amount)
        internal
        override(ERC20, ERC20Votes)
    {
        super._burn(account, amount);
    }
}
