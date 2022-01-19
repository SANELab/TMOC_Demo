function init() {
  // 첫번째 계정으로 주소 설정
  $("#account").val(web3.eth.accounts[0]);
  moment.locale();
}

function loadFile(input)
{
  var file = input.files[0];  //선택된 파일 가져오기

  var name = document.getElementById('chooseFile');
  name.textContent = file.name;
   
  //새로운 이미지 div 추가
  var newImage = document.createElement("img");
  newImage.setAttribute("class", 'img');

  //이미지 source 가져오기
  newImage.src = URL.createObjectURL(file);

  newImage.style.width = "70%";
  newImage.style.height = "70%";
  newImage.style.visibility = "hidden";
  newImage.style.objectFit = "contain";

  //이미지 image-show div에 추가
  var container = document.getElementById('image-show');
  container.appendChild(newImage);  
};

//var submit = document.getElementById('submitButton');
//submit.onclick = showImage;     //Submit 버튼 클릭시 이미지 보여주기

function showImage()
{
  var newImage = document.getElementById('image-show').lastElementChild;
  newImage.style.visibility = "visible";
  var file = $("#chooseFile")[0].files[0];
  //alert(typeof(file) + " : " + file.name);
  get_hash(file);
}

function get_hash(file) {
  var reader = new FileReader();
  if(!file) {
    alert("No file readed!");
    return;
  }
  reader.onload = function(){
    var file_res = this.result;
    var file_wordArr = CryptoJS.lib.WordArray.create(file_res); // Convert to string
    var hash_res = CryptoJS.SHA256(file_wordArr).toString(); // Calculate Result

    var hashDiv = document.getElementById("hashDiv");
    var hashElement = document.createElement("input");
    hashElement.setAttribute("type", "text");
    hashElement.setAttribute("id", "imageHash");
    hashElement.setAttribute("name", "imageHash");
    hashElement.setAttribute("value", hash_res);
    hashElement.style.visibility = "hidden";
    //alert(hashElement.type + " : " + hashElement.id + " : " + hashElement.name + " : " + hashElement.value);
    hashDiv.appendChild(hashElement);
  }
  reader.readAsArrayBuffer(file);
}

function addTree() {
  //alert(typeof($("#imageHash").val()) + " : " + $("#imageHash").val());
  smartContract.sol_addTree(
    $("#tree_number").val(),
    $("#imageHash").val(),
    $("#tree_uploader").val(),
    { from: $("#account").val(), gas: 3000000 },
    (err, result) => {
      if (!err) {
        alert("Transaction success: " + result);
        addTree_db('./meta_attacktree_db',{tree_number:$("#tree_number").val(), tree_hash:$("#imageHash").val(), tree_uploader:$("#tree_uploader").val()});
      }
    }
  );
}

function addTree_db(path, params, method='post'){
  /* user_db에 트랜잭션 성공한 공격트리 정보 등록하기 */
  const form = document.createElement('form');
  form.method = method;
  form.action = path;
  for (const key in params) {
    if (params.hasOwnProperty(key)) {
      const hiddenField = document.createElement('input');
      hiddenField.type = 'hidden';
      hiddenField.name = key;
      hiddenField.value = params[key];
      form.appendChild(hiddenField);
    }
  }
  document.body.appendChild(form);
  form.submit();
}

$(function() {
  init();
});

// 트랜잭션 테이블 최상위 행 출력
/*
function show_tree_table() {
  const tree_table = document.getElementById("tree_table");
  const type_row = tree_table.insertRow();

  const Type_decription1 = type_row.insertCell(0);
  const Type_decription2 = type_row.insertCell(1);
  const Type_decription3 = type_row.insertCell(2);

  Type_decription1.innerHTML = "No.";
  Type_decription2.innerHTML = "Tree Hash";
  Type_decription3.innerHTML = "Date";
}

// 트랜잭션 내역을 테이블형태로 출력
async function showTreeList() {
  const tree_table = document.getElementById("tree_table");
  const total = smartContract.sol_getTotal().toString();

  smartContract.sol_tree().watch(async (err, res) => {
    if (!err) {
      const row = tree_table.insertRow();
      const tree_cell1 = row.insertCell(0);
      const tree_cell2 = row.insertCell(1);
      const tree_cell3 = row.insertCell(2);

      const time = (await res.args.timestamp.toString()) * 1000;

      tree_cell1.innerHTML = await res.args.tree_number.toString();
      tree_cell2.innerHTML = await res.args.imageFileOpenInput.toString();
      tree_cell3.innerHTML = moment(time).format("YYYY-MM-DD hh:mm")
    }
  });

  console.log(total);
  for (let i = 0; i < total; i++) {
    const tree = await smartContract.sol_getTree(i);
    const toStrings = await tree.toString();
    const strArray = toStrings.split(",");

    const time = strArray[3] * 1000;
    const row = tree_table.insertRow();

    const tree_cell1 = row.insertCell(0);
    const tree_cell2 = row.insertCell(1);
    const tree_cell3 = row.insertCell(2);

    tree_cell1.innerHTML = strArray[0];
    tree_cell1.innerHTML = strArray[1];
    tree_cell2.innerHTML = moment(time).format("YYYY-MM-DD hh:mm")
  }
}
*/