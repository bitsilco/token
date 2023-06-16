// SPDX-License-Identifier: MIT
pragma solidity ^0.8.2;

interface IBEP20 {
    function transfer(address to, uint256 value) external returns (bool);
}

contract BitsilcoTokenPresale {
    mapping(address => uint256) private balances;
    mapping(address => mapping(address => uint256)) private allowance;
    uint256 public totalSupply = 350000000 * 10 ** 18;
    string public name = "BITSILCO";
    string public symbol = "BSC";
    uint8 public decimals = 18;
    string public imageUrl = "https://bitsilco.com/img/bitsilco-token-icon.png";
    uint256 public tokenPrice = 0.02 * 10 ** 6; // Price in USDT (6 decimal places)
    address public bitsilcoWallet = 0x5968BB8B1aB5Fa3E14Ad3D77F7A766AC37f44B0d;
    address public bitsilcoTokenContract = 0x4f525bc15Ca89d822F9E531a49ae05942dA3D7Bc;
    address public usdtContract = 0x55d398326f99059fF775485246999027B3197955; // USDT (BEP-20) contract address on BSC
    address public receiverUSDTWallet = 0x5968BB8B1aB5Fa3E14Ad3D77F7A766AC37f44B0d; // Receiver's USDT wallet address

    event Transfer(address indexed from, address indexed to, uint256 value);
    event Approval(address indexed owner, address indexed spender, uint256 value);

    constructor() {
        balances[msg.sender] = totalSupply;
    }

    function balanceOf(address owner) public view returns (uint256) {
        return balances[owner];
    }

    function transfer(address to, uint256 value) public returns (bool) {
        require(balanceOf(msg.sender) >= value, "Insufficient balance");
        _transfer(msg.sender, to, value);
        return true;
    }

    function transferFrom(address from, address to, uint256 value) public returns (bool) {
        require(balanceOf(from) >= value, "Insufficient balance");
        require(allowance[from][msg.sender] >= value, "Insufficient allowance");
        _transfer(from, to, value);
        allowance[from][msg.sender] -= value;
        return true;
    }

    function approve(address spender, uint256 value) public returns (bool) {
        _approve(msg.sender, spender, value);
        return true;
    }

    function setImageUrl(string memory url) public {
        imageUrl = url;
    }

    function _transfer(address from, address to, uint256 value) internal {
        balances[from] -= value;
        balances[to] += value;
        emit Transfer(from, to, value);

        // Transfer equivalent USDT (BEP-20) tokens to the receiver's USDT wallet address
        IBEP20(usdtContract).transfer(receiverUSDTWallet, value);
    }

    function _approve(address owner, address spender, uint256 value) internal {
        allowance[owner][spender] = value;
        emit Approval(owner, spender, value);
    }
}
