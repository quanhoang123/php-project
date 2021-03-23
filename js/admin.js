var listAdmin = function() {
    var listadmin = "";
    for (let i in user) {
        listadmin +=
            `<tr>
                <td> ${ user[i].id}  </td>
                <td> ${ user[i].name}  </td>
                <td> ${ user[i].email}  </td>
                <td> ${ user[i].password}  </td>
                <td> ${ user[i].phone}  </td>
                <td> ${ user[i].role}  </td>
                <td><button onclick="updateUser( ${i})" class="btn btn-outline-danger"  data-toggle="modal" data-target="#updateUser"><i class="fas fa-cogs"></i></button>
                <button onclick="deleteUser(${i})" class = "btn ml-1 btn-outline-warning"><i class="fas  fa-trash"></i></button></td>
            </tr>`;

    }
    document.getElementById("user-admin").innerHTML = listadmin;
}
listAdmin();

// Them nguoi dung
// var addUser = function() {
//     var User = {
//         id: "user" + parseInt(user.length + 1),
//         name: document.getElementById("name").value,
//         password: document.getElementById("password").value,
//         sdt: document.getElementById("sdt").value,
//         email: document.getElementById("eamil").value,
//         role: document.getElementById("role").value,
//     }

//     user.push(User);
//     callAPI('users',"POST", User)
//     window.location.reload();
// }

// xoa nguoi dung 
// var deleteUser = function(i) {
//     if (user[i].role != "admin") {
//         user.splice(i, 1);
//         localStorage.setItem('listUser', JSON.stringify(user));
//         window.location.reload();
//         alert("đã xóa user")
//     }
//     if (users[i].role == "admin") {
//         alert("Không thể xóa admin")
//     }
// }

// chỉnh sua nguoi dung
// var updateUser = function(i) {
//     var k = user[i];
//         document.getElementById("idd").value = k.id;
//         document.getElementById("name").value = k.name,
//         document.getElementById("password").value = k.password,
//         document.getElementById("sdt").value = k.phone,
//         document.getElementById("eamil").value = k.email,
//         document.getElementById("role").value = k.role


//     document.getElementById("idd").setAttribute("disabled", "disabled");
//     document.getElementById("submitUpdateUser").innerHTML = '<button class="btn btn-outline-danger mt-3" onclick="submitUpdateUser(' + i + ')"> Đồng ý <button>';
// }

// gửi phần chỉnh sửa user
// var submitUpdateUser = function(i) {
//     alert("cap nhat thanh cong")

//     var k = user[i];
//         k.id = document.getElementById("idd").value,
//         k.name = document.getElementById("named").value,
//         k.password = document.getElementById("passwordd").value,
//         k.phone = document.getElementById("sdtd").value,
//         k.email = document.getElementById("eamild").value,
//         k.role = document.getElementById("roled").value,

//         // document.getElementById("idd").setAttribute("disabled", "disabled");
//         // localStorage.setItem('listUser', JSON.stringify(user));
//         // Save();
//     window.location.reload();

// }

// function Save() {
//     localStorage.setItem('listUser', JSON.stringify(user))
// }

// function reload() {
//     user = JSON.parse(localStorage.getItem('listUser'));
//     listAdmin();
// }
// if (localStorage.getItem("listUser") != null) {
//     reload();
// }
// else{
//     saveUser();
// }






var productProduct = function() {
    var listproduct = "";
    for (let i in product) {
        listproduct +=
            `<tr>
    <td> ${ product[i].id}  </td>
    <td> ${ product[i].name}  </td>
    <td><img src="${ product[i].img }" alt="" style="width: 100px; border-radius:24px"></td>
    <td> ${product[i].price}  </td>
    <td><button onclick="updateProduct( ${i})" class="btn btn-outline-danger"  data-toggle="modal" data-target="#updateProduct"><i class="fas fa-cogs"></i></button>
    <button onclick="deleteProduct(${i})" class = "btn ml-1 btn-outline-warning"><i class="fas  fa-trash"></i></button></td>
    </tr>`;
    }
    document.getElementById("product-admin").innerHTML = listproduct;
}
productProduct();
// Thêm sản phẩm
var addProduct = function() {
    var Product = {
        id: "SP" + parseInt(product[i].length + 1),
        name: document.getElementById("name").value,
        img: document.getElementById("img").value,
        price: document.getElementById("price").value
    }
    product.push(Product);
    callAPI("product", "POST", "Product").then((response) => {
        alert("Thêm sản phẩm thành công");
    });

}

// Xoa san pham
var deleteProduct = function(i) {
    i = parseInt(i);
    console.log(i);
    var r = confirm("Ban có thực sự muốn xóa");
    if (r == true) {
        callAPI(`product/${i}`, "DELETE", null).then((response) => {
            alert("Xoá thành công!");
        });
    } else {
        window.location.href = "adminHotel.html";
    }
}

// chỉnh sửa sản phẩm
var updateProduct = function(i) {
    var k = product[i];
    document.getElementById("idd").value = k.id;
    document.getElementById("named").value = k.name;
    document.getElementById("imgd").value = k.img;
    document.getElementById("priced").value = k.price;
    document.getElementById("idd").setAttribute("disabled", "disabled");
    document.getElementById("submitUpdateProduct").innerHTML = '<button class="btn btn-outline-danger mt-3" onclick="submitUpdateProduct(' + i + ')"> Đồng ý <button>';
}

// gửi phần chỉnh sửa sản phẩm
var submitUpdateProduct = function(i) {
    var k = product[i];
    k.id = document.getElementById("idd").value;
    k.name = document.getElementById("named").value;
    k.img = document.getElementById("imgd").value;
    k.price = document.getElementById("priced").value;
    // document.getElementById("idd").setAttribute("disabled", "disabled");
    localStorage.setItem('listproduct', JSON.stringify(product));
    //Save();
    window.location.reload();

}

// function Save() {
//     localStorage.setItem('listproduct', JSON.stringify(product))
// }

// function load() {
//     product = JSON.parse(localStorage.getItem('listproduct'));
//     productProduct();
// }
// if (localStorage.getItem("listproduct") != null) {
//     load();
// }