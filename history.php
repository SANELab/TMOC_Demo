<!DOCTYPE html>
<?php
$title = 'TMOC';
include('head.php');
include('navbar.php');
?>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./js/lib/web3-light@0.20.6.js"></script>
  <script type="text/javascript" src="./js/lib/moment.js"></script>
  <script type="text/javascript" src="./js/lib/moment_locale.js"></script>
  <script type="text/javascript" src="./js/abi.js"></script>
  <script type="text/javascript" src="./js/app_connect.js"></script>
  <script type="text/javascript" src="./js/meta_app_threat.js"></script>
  <script type="text/javascript" src="./js/meta_app_library.js"></script>
  <script type="text/javascript" src="./js/app_tree.js"></script>
  <script type="text/javascript">
  </script>
</head>

<body>
  <main role="main">
		<div class="jumbotron">
			<div class="container">
				<h1>History</h1>
			</div>
		</div>
    <div class="container">
      <div class="card rounded-0">
        <div class="card-body p-3">
          <span class="card-title">
            <div class="text-center">
  		        <h4><strong>Token Address(Ethereum Ropsten Test Net)</strong></h4>
  		        <a href='https://ropsten.etherscan.io/address/0xcec086b777a3a9abcf2975dce5bf0541be7b2e29'>
              https://ropsten.etherscan.io/address/0xcec086b777a3a9abcf2975dce5bf0541be7b2e29
              </a>
            </div>
          </span>
        </div>
      </div>
    </div>
    <br />
    <div class="container">
    <div role="tabpanel" class="tab-pane config-section active" id="fields">
      <form method="POST" autocomplete="off" class="w-100">
        <h5>Transaction List</h5>
        <!-- 공격 라이브러리의 트랜잭션 목록을 app_library.js 파일의 showLibraryList() 함수를 통해 출력 -->
        <ul class="nav nav-tabs mt-3" role="tablist">
          <li class="nav-item active">
            <a class="nav-link active" href="#attack_library_transaction_list" role="tab" data-toggle="tab">Attack Library Transaction List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#threat_transaction_list" role="tab" data-toggle="tab">Threat Transaction List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#attack_tree_transaction_list" role="tab" data-toggle="tab">Attack Tree Transaction List</a>
          </li>
        </ul>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="attack_library_transaction_list">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <td><b>User</b></td>
                      <td><b>Name</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Student ID</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Wallet Address</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>test1</td>
                      <td>test1</td>
                      <td>test1</td>
                      <td>test1</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="threat_transaction_list">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <td><b>User</b></td>
                      <td><b>Name</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Student ID</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Wallet Address</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>test2</td>
                      <td>test2</td>
                      <td>test2</td>
                      <td>test2</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="attack_tree_transaction_list">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <td><b>User</b></td>
                      <td><b>Name</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Student ID</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Wallet Address</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>test3</td>
                      <td>test3</td>
                      <td>test3</td>
                      <td>test3</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </main>
</body>
<?php include('tail.php'); ?>