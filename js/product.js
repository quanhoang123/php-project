function listWatch() {
    for (let i in product) {
        var prinf =
            `   
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-4">										
        <div class="produre_box bg-white shadow-sm ">										
            <div class="image_box imgs" >										
                <img src="` + product[i].img + `" style="width:260px; height:200px;  border-radius:10px;">										
            </div>										
                <div class="info_box p-3 bg-white ">										
                    <p class="float-left font-weight-bold mb-0 text-center" style="font-size: 70%;color:black; "><b>` + product[i].name + `</b></p><p class="float-left font-weight-bold mb-2 text-center" style="font-size: 70%;"><b>` + product[i].price + `đ</b></p>									
                        <div style="clear: both;"></div>										
                            <div class="star_box  pt-2" >										                                                             
                                        <div class="order_box btndetail" >
                                            <button type="button" class="btn btn-primary col-sm-6" data-toggle="modal" data-target="#exampleModalLong" onclick="getProduct(${i})" >Detail</button>
                                            <button type="button" class="btn btn-primary col-sm-6"  data-toggle="modal"  onclick="addProduct123(${i})">Add Cart</button>	 
                                        </div>	
                                <div class="modal fade mt-5" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >										
                                    <div class="modal-dialog" role="diolog" style="width:30%; >										
                                        <div class="modal-content">										
                                            <div class="modal-body" style="background:rgb(199,226,78); ">										
                                                <div id="printf_food" >	
                                                </div>										
                                            </div>										
                                        </div>										
                                    </div>										
                                </div>										
                            </div>	                          														
                            <div style="clear: both;"></div>																				
                </div>
        </div>										
    </div>`;
        document.getElementById("new-product").innerHTML += prinf;

    }

}

listWatch();
var getProduct = function(id) {
    let html = "";
    // let allWatch = JSON.parse(localStorage.getItem('listproduct'))
    let aa = product[id];
    document.getElementById("printf_food").innerHTML = `${html}         
    <div class="boxProduct" >
        <div class="box"> <img src="${aa.img}" alt="" style="max-width:100% ;">
            <div class="box-heading">
                <h3 class="title">${aa.name}</h3><span class="post"> ${aa.price}đ</span>
            </div>
            <div class="boxContent">
                <p class="description" style="color:black;">${aa.note}</p>

            </div>
        </div>
    </div>           
    `;
}






function productDiscount() {
    for (let i in discount) {
        // var data = JSON.parse(JSON.stringify(discount[i]))
        var prinf =
            ` <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-4">										
            <div class="produre_box bg-white shadow-sm ">										
                <div class="image_box imgs">										
                    <img src="` + discount[i].img + `" style="width:260px; height:200px;  border-radius:10px;">										
                </div>										
                    <div class="info_box p-3 bg-white ">										
                        <p class="float-left font-weight-bold mb-0 text-center" style="font-size: 70%"><b>` + discount[i].name + `</b></p>
                        <span style="float:left; font-size: 70%"><strike> <b>` + discount[i].price + `đ</b></strike> </span>
                        <p class=" font-weight-bold mb-2" style="font-size: 70%;float:right"><b>` + discount[i].price + `đ</b></p>									
                            <div style="clear: both;"></div>										
                                <div class="star_box float-left pt-2 " >
                                    <div class="order_box btndetail" >
                                        <button type="button" class="btn btn-primary col-sm-6" data-toggle="modal" data-target="#exampleModalLong1" onclick="getProductDiscount(${i})" >Detail</button>
                                        <button type="button" class="btn btn-primary col-sm-6"  data-toggle="modal"  onclick="addProduct123(${i})">Add Cart</button>	 
                                    </div>	                   	
                                    <div  class="modal fade mt-5" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >										
                                        <div class="modal-dialog" role="diolog" style="width:30%; >										
                                            <div class="modal-content">										
                                                <div class="modal-body" style="background:rgb(199,226,78); ">										
                                                    <div id="printf_watch123" >	
                                                    </div>										
                                                </div>										
                                            </div>										
                                        </div>										
                                    </div>										
                                </div>	                          														
                            <div style="clear: both;"></div>																				
                    </div>
            </div>										
        </div>`;
        document.getElementById("product-discount").innerHTML += prinf;

    }

}

productDiscount();
var getProductDiscount = function(id) {
    let html = "";
    // let allDiscount = JSON.parse(localStorage.getItem('listproductdiscount'))

    let aa = discount[id];
    document.getElementById("printf_watch123").innerHTML = `${html}         
    <div class="boxProduct" >
        <div class="box"> <img src="${aa.img}" alt="" style="max-width:100% ;">
            <div class="box-heading">
                <h3 class="title">${aa.name}</h3><span class="post"> ${aa.price}đ</span>
            </div>
            <div class="boxContent">
                <p class="description text-center">${aa.note}</p>
            </div>
        </div>
    </div>           
    `;
}



function displayCart() {
    for (let i in cart) {
        var data = JSON.parse(JSON.stringify(cart[i]))
        var print = `<div class="cart-item cart-column">
        <img class="cart-item-image" src="${data.img}" width="100" height="100">
        <span class="cart-item-title">${data.name}</span>
    </div>
    <span class="cart-price cart-column">${data.price}</span>
    <div class="cart-quantity cart-column">
        <input class="cart-quantity-input" type="number" value="1">
        <button class="btn btn-danger" type="button">REMOVE</button>
    </div>`;
        document.getElementById("product-discount").innerHTML += prinf;
    }
}



