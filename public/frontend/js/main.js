// log in
const form = document.querySelector("form");

//-------------------product 1---------------------------
let pay1 = document.getElementById("buy1");
let price1 = document.getElementById("pricee1");
let per1 = document.getElementById("per1");
let title1 = document.getElementById("tit1");
//-------------------product 2---------------------------
let pay2 = document.getElementById("buy2");
let price2 = document.getElementById("pricee2");
let per2 = document.getElementById("per2");
let title2 = document.getElementById("tit2");
//-------------------product 3---------------------------
let pay3 = document.getElementById("buy3");
let price3 = document.getElementById("pricee3");
let per3 = document.getElementById("per3");
let title3 = document.getElementById("tit3");
//-------------------product 4---------------------------
let pay4 = document.getElementById("buy4");
let price4 = document.getElementById("pricee4");
let per4 = document.getElementById("per4");
let title4 = document.getElementById("tit4");
//-------------------product 5---------------------------
let pay5 = document.getElementById("buy5");
let price5 = document.getElementById("pricee5");
let per5 = document.getElementById("per5");
let title5 = document.getElementById("tit5");
//----------------------------------------------

// ---------------------------- add new product
//-------------------product 1---------------------------
let datapro = [];

pay1.onclick = function () {
  let newPro = {
    title: title1.innerHTML,
    price: price1.innerHTML,
    per: per1.innerHTML,
  };
  datapro.push(newPro);
  localStorage.setItem("product", JSON.stringify(datapro));
  console.log(newPro);
  showdata();
};
if (localStorage != null) {
  datapro = JSON.parse(localStorage.product);
} else {
  datapro = [];
}
//-------------------product 2---------------------------
pay2.onclick = function () {
  let newPro = {
    title: title2.innerHTML,
    price: price2.innerHTML,
    per: per2.innerHTML,
  };
  datapro.push(newPro);
  localStorage.setItem("product", JSON.stringify(datapro));
  console.log(newPro);
  showdata();
};
//-------------------product 3---------------------------
pay3.onclick = function () {
  let newPro = {
    title: title3.innerHTML,
    price: price3.innerHTML,
    per: per3.innerHTML,
  };
  datapro.push(newPro);
  localStorage.setItem("product", JSON.stringify(datapro));
  console.log(newPro);
  showdata();
};
//-------------------product 4---------------------------
pay4.onclick = function () {
  let newPro = {
    title: title4.innerHTML,
    price: price4.innerHTML,
    per: per4.innerHTML,
  };
  datapro.push(newPro);
  localStorage.setItem("product", JSON.stringify(datapro));
  console.log(newPro);
  showdata();
};
//-------------------product 5---------------------------
pay5.onclick = function () {
  let newPro = {
    title: title5.innerHTML,
    price: price5.innerHTML,
    per: per5.innerHTML,
  };
  datapro.push(newPro);
  localStorage.setItem("product", JSON.stringify(datapro));
  console.log(newPro);
  showdata();
};
//----------------------------- show data
function showdata() {
  let table = "";

  for (let i = 0; i < datapro.length; i++) {
    table += `
      <tr>
          
          <td>${i + 1}</td>
          <td>${datapro[i].title}</td>
          <td>${datapro[i].price}</td>
          <td>${datapro[i].per}</td>
          
          <td><a href="book.html"> <button class="sell" id="buuuuu">شراء</button></a></td>
          
          <td><button class="sell" onclick = " deletedata(${i}) " id="delete">حذف</button></td>
      </tr>
      `;
  }
  document.getElementById("tbody").innerHTML = table;
  let btnDelete = document.getElementById("deleteAll");
  if (datapro.length > 0) {
    btnDelete.innerHTML = `
        <button class="sell all" onclick="deleteAll()">حذف الكل (${datapro.length})</button>
       `;
  } else {
    btnDelete.innerHTML = "";
  }
}

showdata();
//---------------------------------delete product
function deletedata(i) {
  datapro.splice(i, 1);
  localStorage.product = JSON.stringify(datapro);
  showdata();
}
function deleteAll() {
  localStorage.clear(); // OR localStorage.product = JSON.stringify(dataPro);
  datapro.splice(0);
  showdata();
}

// Start Login File
