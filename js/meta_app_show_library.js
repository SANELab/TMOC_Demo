function init() {
  // 입력된 지갑 주소로 설정
  $("#account").val(web3.eth.accounts[0]);
  moment.locale();
}

// 트랜잭션 테이블 최상위 행 출력
function show_lib_table() {
  const lib_table = document.getElementById("lib_table");
  const type_row = lib_table.insertRow();

  const Type_decription1 = type_row.insertCell(0);
  const Type_decription2 = type_row.insertCell(1);
  const Type_decription3 = type_row.insertCell(2);
  const Type_decription4 = type_row.insertCell(3);

  Type_decription1.innerHTML = "DFD Element";
  Type_decription2.innerHTML = "STRIDE";
  Type_decription3.innerHTML = "Content";
  Type_decription4.innerHTML = "URL";
}

// 트랜잭션 내역을 테이블형태로 출력
async function showLibraryList() {
  const lib_table = document.getElementById("lib_table");
  const total = smartContract.sol_getTotal().toString();
  
  smartContract.sol_attacklibrary().watch(async (err, res) => {
    if (!err) {
      const row = lib_table.insertRow();
      
      const lib_cell1 = row.insertCell(0);
      const lib_cell2 = row.insertCell(1);
      const lib_cell3 = row.insertCell(2);
      const lib_cell4 = row.insertCell(3);
      const lib_cell5 = row.insertCell(4);
      const lib_cell6 = row.insertCell(5);
      const lib_cell7 = row.insertCell(6);

      const time = (await res.args.timestamp.toString()) * 1000;

      lib_cell1.innerHTML = await res.args.no.toString();
      lib_cell2.innerHTML = await res.args.lib_element;
      lib_cell3.innerHTML = await res.args.stride;
      lib_cell4.innerHTML = await res.args.content;
      lib_cell5.innerHTML = await res.args.url;
      lib_cell6.innerHTML = await res.args.lib_writer;
      lib_cell7.innerHTML = moment(time).format("YYYY-MM-DD hh:mm");

    }
  });

  console.log(total);

  const row2 = lib_table.insertRow();
  for (let i = 0; i < total; i++) {
    const attacklibrary = await smartContract.sol_getLibrary(i);
    const toStrings = await attacklibrary.toString();
    const strArray = toStrings.split(",");

    const time = strArray[6] * 1000;
    const row = lib_table.insertRow();

    const lib_cell1 = row.insertCell(0);
    const lib_cell2 = row.insertCell(1);
    const lib_cell3 = row.insertCell(2);
    const lib_cell4 = row.insertCell(3);
    const lib_cell5 = row.insertCell(4);
    const lib_cell6 = row.insertCell(5);
    const lib_cell7 = row.insertCell(6);

    lib_cell1.innerHTML = strArray[0];
    lib_cell2.innerHTML = strArray[1];
    lib_cell3.innerHTML = strArray[2];
    lib_cell4.innerHTML = strArray[3];
    lib_cell5.innerHTML = strArray[4];
    lib_cell6.innerHTML = strArray[5];
    lib_cell7.style.width = "60%";
    lib_cell7.innerHTML = moment(time).format("YYYY-MM-DD hh:mm")
  }
}

$(function() {
  init();
  show_lib_table();
  showLibraryList();
});