<html>
    <head>
        <!--<script type="text/javascript" src="../js/lib/web3-light@0.20.6.js"></script>-->
        <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js/dist/web3.min.js"></script>
        <script>
            if (typeof web3 != 'undefined') {
                web3 = new Web3(web3.currentProvider);
                console.log('web3 주입완료'); // console.log로 대체 가능
                ethereum.request({ method: 'eth_requestAccounts' });
            } else {
                alert('Metamask 설치가 필요합니다.');
            }

            let userAccount;
            let checkAccountChange = setInterval(async function(){
                let currentAccount = await web3.eth.getAccounts().then(function(array){
                    return array[0];
                });
                if(currentAccount !== userAccount) {
                    userAccount = currentAccount;
                }
                console.log('Your account is ' + userAccount); // For debugging
            }, 1000); // 1초마다 현재 활성화된 Metamask 계정 불러온 후 현재 userAccount 업데이트
        </script>
    </head>
</html>