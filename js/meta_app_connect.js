//personal.unlockAccount(eth.accounts[0], "eth")

// 기존 웹사이트에 web3가 연결되었는지 확인
if(typeof web3 !== "undefined"){
  web3 = new Web3(web3.currentProvider);
  console.log("Metamask connected");
  ethereum.request({ method: 'eth_requestAccounts' });
} else {
  web3 = new Web3(new web3.providers.HttpProvider("http://163.152.126.96:8545"));
  console.log("Metamask가 없습니다");
}
/*
if (web3.isConnected()) {
  console.log("connected");
} else {
  console.log("not connected");
}
*/

// Remix 사이트에서 Deploy 후 생성된 컨트랙트 주소 입력
const contractAddress = "0xEB8e9539687BaD3bBf510592d658C35F1566CC70";

// 다른 js 파일에서 web3.eth 기능을 사용할 수 있도록 연결된 컨트랙트 주소와 abi 파일에 대한 변수 선언
const smartContract = web3.eth.contract(abi).at(contractAddress);