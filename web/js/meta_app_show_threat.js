function init() {
  // 첫번째 계정으로 주소 설정
  $("#account").val(web3.eth.accounts[0]);
  moment.locale();
}

// 트랜잭션 테이블 최상위 행 출력
function show_threat_table() {
  const threat_table = document.getElementById("threat_table");
  const type_row = threat_table.insertRow();

  const Type_decription1 = type_row.insertCell(0);
  const Type_decription2 = type_row.insertCell(1);
  const Type_decription3 = type_row.insertCell(2);
  const Type_decription4 = type_row.insertCell(3);
  const Type_decription5 = type_row.insertCell(4);
  const Type_decription6 = type_row.insertCell(5);
  const Type_decription7 = type_row.insertCell(6);
  Type_decription1.innerHTML = "No.";
  Type_decription2.innerHTML = "DFD Element";
  Type_decription3.innerHTML = "Content";
  Type_decription4.innerHTML = "Lib_No.";
  Type_decription5.innerHTML = "Writer";
  Type_decription6.innerHTML = "Evaluator";
  Type_decription7.innerHTML = "Date";
}

// 트랜잭션 내역을 테이블형태로 출력
async function showThreatList() {
  const threat_table = document.getElementById("threat_table");
  const total = smartContract.sol_getTotal().toString();

  smartContract.sol_threat().watch(async (err, res) => {
    if (!err) {
      const row = threat_table.insertRow();

      const threat_cell1 = row.insertCell(0);
      const threat_cell2 = row.insertCell(1);
      const threat_cell3 = row.insertCell(2);
      const threat_cell4 = row.insertCell(3);
      const threat_cell5 = row.insertCell(4);
      const threat_cell6 = row.insertCell(5);
      const threat_cell7 = row.insertCell(6);

      const time = (await res.args.timestamp.toString()) * 1000;

    threat_cell1.innerHTML = await res.args.threat_number.toString();
    threat_cell2.innerHTML = await res.args.threat_element;
    threat_cell3.innerHTML = await res.args.threat_detail;
    threat_cell4.innerHTML = await res.args.lib_number.toString();
    threat_cell5.innerHTML = await res.args.threat_writer;
    threat_cell6.innerHTML = await res.args.evaluator;
    threat_cell7.innerHTML = moment(time).format("YYYY-MM-DD hh:mm");
    }
  });

  console.log(total);
  for (let i = 0; i < total; i++) {
    const threat = await smartContract.sol_getThreat(i);
    const toStrings = await threat.toString();
    const strArray = toStrings.split(",");

    const time = strArray[6] * 1000;
    const row = threat_table.insertRow();

  const threat_cell1 = row.insertCell(0);
  const threat_cell2 = row.insertCell(1);
  const threat_cell3 = row.insertCell(2);
  const threat_cell4 = row.insertCell(3);
  const threat_cell5 = row.insertCell(4);
  const threat_cell6 = row.insertCell(5);
  const threat_cell7 = row.insertCell(6);

  threat_cell1.innerHTML = strArray[0];
  threat_cell2.innerHTML = strArray[1];
  threat_cell3.innerHTML = strArray[2];
  threat_cell4.innerHTML = strArray[3];
  threat_cell5.innerHTML = strArray[4];
  threat_cell6.innerHTML = strArray[5];
    threat_cell7.style.width = "60%";
  threat_cell7.innerHTML = moment(time).format("YYYY-MM-DD hh:mm")
  }
}


$(function() {
  init();
  show_threat_table();
  showThreatList();
});
