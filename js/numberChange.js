function changeNum(ItemId){
  var xmlhttp = new XMLHttpRequest();
  var getSplit = ItemId.split("_");
  var targetID = "SaleNum_"+getSplit[1];
  xmlhttp.onreadystatechange = function(){
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
      document.getElementById(targetID).innerHTML = xmlhttp.responseText;
    }
  };
  xmlhttp.open("GET","numberChange.php?q="+ItemId,true);
  xmlhttp.send();
}
