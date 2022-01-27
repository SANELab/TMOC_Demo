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
  		        <a href='https://ropsten.etherscan.io/address/0x0xEB8e9539687BaD3bBf510592d658C35F1566CC70'>
              https://ropsten.etherscan.io/address/0xEB8e9539687BaD3bBf510592d658C35F1566CC70
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
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Library Number</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Related Component</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Attack Type</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Library Contents</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Reference URL</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Writer</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>score</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td><?php echo $row["library_number"]; ?></td>
                        <td><?php echo $row["library_element"]; ?></td>
                        <td><?php echo $row["library_stride"]; ?></td>
                        <td><?php echo $row["library_contents"]; ?></td>
                        <td><?php echo $row["library_url"]; ?></td>
                        <td><?php echo $row["library_writer"]; ?></td>
                        <td><?php echo $row["library_score"]; ?></td>
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
                    <td class="d-none d-md-table-cell d-lg-table-cell"><b>Threat Number</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Element Name</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Threat Contents</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Threat Reason</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Library Number</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Writer</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Score</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td><?php echo $row["threat_number"]; ?></td>
                        <td><?php echo $row["element_name"]; ?></td>
                        <td><?php echo $row["threat_contents"]; ?></td>
                        <td><?php echo $row["threat_reason"]; ?></td>
                        <td><?php echo $row["library_number"]; ?></td>
                        <td><?php echo $row["writer"]; ?></td>
                        <td><?php echo $row["threat_score"]; ?></td>
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
                    <td class="d-none d-md-table-cell d-lg-table-cell"><b>Tree Number</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Tree Hash</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Writer</b></td>
                      <td class="d-none d-md-table-cell d-lg-table-cell"><b>Score</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $row["tree_number"]; ?></td>
                      <td><?php echo $row["tree_hash"]; ?></td>
                      <td><?php echo $row["tree_uploader"]; ?></td>
                      <td><?php echo $row["tree_score"]; ?></td>
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
