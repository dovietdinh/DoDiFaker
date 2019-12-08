var btn = $('#button');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
        $("a.navbar-brand").css('height', '52px');
    } else {
        btn.removeClass('show');
        $("a.navbar-brand").css('height', '80px');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '1000');
});

function formatNumber(nStr, decSeperate, groupSeperate) { //use formatNumber(number input,'.',',')
    nStr += '000 ';
    x = nStr.split(decSeperate);
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
    }
    return x1 + x2;
}

function create_col_product_HTML(hang, name, mony, file_image, loai) {

    var mony = formatNumber(mony, '.', ',');

    var src = "images/" + loai + "/" + hang + "/" + file_image;
    var html = '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 "><div class="card"> <img class = "card-img-top" src="' + src + '"   alt = "Card image"style = "width:100%" > <div class = "card-body" > <h4 class = "card-title adidas-name" > ' + name + ' </h4> <p class = "card-text"> Giá: <span class = "adidas-mony"> ' + mony + ' </span> VNĐ </p> <a href = "#"class = "btn btn-primary"> See Profile </a> </div> </div> </div> ';
    $(".row#" + hang).prepend(html);

}

function loadXMLDoc(url) {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for older browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            getXML(xmlhttp.responseText);
            // console.log('getsucced');
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function getXML(xml) {
    var parent = new DOMParser();
    var xmlDoc = parent.parseFromString(xml, 'text/xml'); //create tree dom xml
    var x = xmlDoc.getElementsByTagName('product');
    for (var i = 0; i < x.length; i++) { // chưa xử lý lỗi dữ kiệu đầu vào
        var name = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
        var mony = x[i].getElementsByTagName("mony")[0].childNodes[0].nodeValue;
        var file_image = x[i].getElementsByTagName("file_image")[0].childNodes[0].nodeValue;
        var hang = x[i].getElementsByTagName("hang")[0].childNodes[0].nodeValue;
        var loai = x[i].getElementsByTagName("loai")[0].childNodes[0].nodeValue;
        create_col_product_HTML(hang, name, mony, file_image, loai);
    }

}
var URL_product = 'https://raw.githubusercontent.com/dovietdinh/giayfake/master/database/product.xml';
loadXMLDoc(URL_product);
var d = new Date();
$('#date').text("Desgin by Vũ Tấn Đạt © " + d.getFullYear());