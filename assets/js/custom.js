let reqItems = [];
let selectedRow = null;
jQuery(document).ready(function ($) {


    "use strict";

    let confirmModal = false;

    $(function () {
        $("#tabs").tabs();
    });


    // Page loading animation

    $("#preloader").animate({
        'opacity': '0'
    }, 600, function () {
        setTimeout(function () {
            $("#preloader").css("visibility", "hidden").fadeOut();
        }, 300);
    });


    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var box = $('.header-text').height();
        var header = $('header').height();

        if (scroll >= box - header) {
            $("header").addClass("background-header");
        } else {
            $("header").removeClass("background-header");
        }
    });
    if ($('.owl-clients').length) {
        $('.owl-clients').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            margin: 30,
            autoplay: false,
            smartSpeed: 700,
            autoplayTimeout: 1000,
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 3,
                    margin: 20
                },
                992: {
                    items: 5,
                    margin: 30
                }
            }
        });
    }
    if ($('.owl-testimonials').length) {
        $('.owl-testimonials').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            margin: 30,
            autoplay: false,
            smartSpeed: 700,
            autoplayTimeout: 6000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 2,
                    margin: 20
                },
                992: {
                    items: 2,
                    margin: 30
                }
            }
        });
    }
    if ($('.owl-banner').length) {
        $('.owl-banner').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            margin: 0,
            autoplay: true,
            smartSpeed: 700,
            autoplayTimeout: 10000,
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 1,
                    margin: 20
                },
                992: {
                    items: 1,
                    margin: 30
                }
            }
        });
    }

    $(".Modern-Slider").slick({
        autoplay: true,
        autoplaySpeed: 10000,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnHover: false,
        dots: true,
        pauseOnDotsHover: true,
        cssEase: 'linear',
        // fade:true,
        draggable: false,
        prevArrow: '<button class="PrevArrow"></button>',
        nextArrow: '<button class="NextArrow"></button>',
    });

    $('.filters ul li').click(function () {
        $('.filters ul li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: true,
        masonry: {
            columnWidth: ".all"
        }
    })
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function (j) {
        var dropDown = $(this).closest('li').find('.content');

        $(this).closest('.accordion').find('.content').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });

    let formParam = [];

    $('#saveForm').submit(function (e) {
        formParam = $(this).serializeArray();
        e.preventDefault();
        confirmModal = !confirmModal;
        if (confirmModal === true) {
            if (reqItems.length > 0) {
                $('#saveTxt').html('You are about to submit your request. Are you sure?');
                $('#okBtn').show();
            } else {
                $('#saveTxt').html('At least one item should be included in request.');
                $('#okBtn').hide();
            }
            $('#saveSkin').removeClass('inactive');
        } else {
            $('#saveSkin').addClass('inactive');
        }
    });

    $('#okBtn').click(async () => {
        console.log("FORM PARAM", formParam);
        let params = {};
        for (let i = 0; i < formParam.length; i++) {
            switch (formParam[i].name) {

                case 'cname':
                    params.name = formParam[i].value;
                    break;

                case 'cnum':
                    params.mobile = formParam[i].value;
                    break;

                case 'cemail':
                    params.email = formParam[i].value;
                    break;

                case 'caddr':
                    params.address = formParam[i].value;
                    break;

                case 'ccompany':
                    params.company = formParam[i].value;
                    break;

                case 'cfax':
                    params.fax = formParam[i].value;
                    break;

                case 'ccode':
                    params.customer_code = formParam[i].value;
                    break;

                case 'item_lines':
                    params.items = formParam[i].value;
                    break;

                default:
                    break;
            }
        }

        fetch("/api/b2nLNxUEZR", {
            method: "POST",
            body: JSON.stringify(params)
        })
            .then(response => response.json())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));
    });

    $.getJSON("assets/json/gallery.json", function (json) {
        let gallery = document.getElementById("gallery_inner");
        for (let i = 0; i < json.length; i++) {
            let fig = document.createElement('figure');
            fig.setAttribute("itemprop", "associatedMedia");
            fig.setAttribute("itemscope", true);
            fig.setAttribute("itemtype", "http://schema.org/ImageObject");

            let anchor = document.createElement('a');
            anchor.href = "/assets/images/gallery/" + json[i].url;
            anchor.setAttribute("itemprop", "contentUrl");
            anchor.setAttribute("data-size", json[i].size);

            let img = document.createElement('img');
            img.loading = "lazy";
            img.src = "/assets/images/gallery/" + json[i].url;
            img.setAttribute("itemprop", "thumbnail");
            img.alt = json[i].caption;

            let figcap = document.createElement('figcaption');
            figcap.setAttribute("itemprop", "caption description");
            figcap.innerHTML = json[i].caption;

            anchor.appendChild(img);
            fig.appendChild(anchor);
            fig.appendChild(figcap);

            gallery.appendChild(fig);
        }
    });

    $.getJSON("assets/json/products.json", function (json) {
        retrieved = json;
        let counter = 0;
        let page = [];
        for (let i = 0; i < retrieved.length; i++) {
            let div1 = document.createElement('div');
            div1.classList.add("col-lg-3");
            div1.classList.add("col-md-3");
            div1.classList.add("all");
            div1.classList.add(retrieved[i].cls);
            let div2 = document.createElement('div');
            div2.classList.add("product-item");
            let div3 = document.createElement('div');
            div3.classList.add("down-content");
            let a2 = document.createElement('a');
            let h1 = document.createElement('h4');
            h1.innerHTML = retrieved[i].name;
            a2.appendChild(h1);
            div3.appendChild(a2);
            div2.appendChild(div3);
            div1.appendChild(div2);
            page.push({ cls: retrieved[i].cls, obj: div1 });
            counter++;
            if (counter > productIndexPerPage) {
                counter = 0;
                pages.push(page);
                page = [];
            }
        }
        if (page.length > 0) {
            pages.push(page);
        }
        pages_original = pages;
        renderPage(0);
    });

    $( "#trolleyimage" ).hover(
        function() {
          $( this ).attr( "src", "assets/images/handicartlogohover.png");
        }, function() {
          $( this ).attr( "src", "assets/images/handicartlogo.png");
        }
    );

    $( "#mining" ).hover(
        function() {
          $( this ).attr( "src", "assets/images/industries/mining_green.svg");
        }, function() {
          $( this ).attr( "src", "assets/images/industries/mining.svg");
        }
    );

    $( "#engineering" ).hover(
        function() {
          $( this ).attr( "src", "assets/images/industries/engineering_green.svg");
        }, function() {
          $( this ).attr( "src", "assets/images/industries/engineering.svg");
        }
    );

    $( "#transportation" ).hover(
        function() {
          $( this ).attr( "src", "assets/images/industries/transport_green.svg");
        }, function() {
          $( this ).attr( "src", "assets/images/industries/transport.svg");
        }
    );

    $( "#marine" ).hover(
        function() {
          $( this ).attr( "src", "assets/images/industries/marine_green.svg");
        }, function() {
          $( this ).attr( "src", "assets/images/industries/marine.svg");
        }
    );

    $( "#agri" ).hover(
        function() {
          $( this ).attr( "src", "assets/images/industries/agri_green.svg");
        }, function() {
          $( this ).attr( "src", "assets/images/industries/agri.svg");
        }
    );

    $( "#oil" ).hover(
        function() {
          $( this ).attr( "src", "assets/images/industries/oil_green.svg");
        }, function() {
          $( this ).attr( "src", "assets/images/industries/oil.svg");
        }
    );

});

let renderPaginate = (sel) => {
    let pagesElem = document.getElementById('pages');
    pagesElem.innerHTML = "";
    if (pages.length > 0) {
        for (let i = 0; i < pages.length; i++) {
            let lip = document.createElement('li');
            if (i === sel) {
                lip.classList.add('active');
            }
            let ap = document.createElement('a');
            ap.onclick = () => { renderPage(i) }
            ap.innerHTML = i + 1;
            lip.appendChild(ap);
            pagesElem.appendChild(lip);
        }
    }
}

let renderPage = (pg) => {
    let prod = document.getElementById('product_list');
    prod.innerHTML = "";
    let divParent = document.createElement('div');
    divParent.classList.add("row");
    divParent.classList.add("grid");
    if (pg < pages.length) {
        for (let j = 0; j < pages[pg].length; j++) {
            divParent.appendChild(pages[pg][j].obj);
        }
    }
    prod.appendChild(divParent);
    renderPaginate(pg);
}

let filterPage = (prefix) => {
    pages = [];
    let temp_full = [];
    if (prefix !== '*') {
        for (let i = 0; i < pages_original.length; i++) {
            for (let j = 0; j < pages_original[i].length; j++) {
                if (pages_original[i][j].cls === prefix) {
                    temp_full.push(pages_original[i][j]);
                }
            }
        }
        let pcount = 0;
        let page = [];
        for (let k = 0; k < temp_full.length; k++) {
            pcount++;
            page.push(temp_full[k]);
            if (pcount > productIndexPerPage) {
                pages.push(page);
                page = [];
                pcount = 0;
            }
        }
        if (page.length > 0) {
            pages.push(page);
        }
    } else {
        pages = pages_original;
    }
    renderPage(0);
}

let addToRequest = () => {
    if ($('#cquantity').val() !== null && $('#cquantity').val() !== ""
        && $('#cdescription').val() !== null && $('#cdescription').val() !== "") {
        reqItems.push({
            "quantity": $('#cquantity').val(),
            "part": $('#cpart').val(),
            "stock": $('#cstock').val(),
            "units": $('#cunits').val(),
            "description": $('#cdescription').val()
        });
        $('#item_lines').val(JSON.stringify(reqItems));
        $('#cquantity').val('');
        $('#cpart').val('');
        $('#cstock').val('');
        $('#cunits').val('');
        $('#cdescription').val('');
        renderTable();
    } else {
        alert("Quantity, Description required");
    }
}

let renderTable = () => {
    $('#tbl-content').html('');
    for (let j = 0; j < reqItems.length; j++) {
        let itemRow = $('<div></div>').addClass('tbl-row').click(() => { selectRow(j) });
        (j === selectedRow) ? itemRow.addClass('selected') : null;
        let col1 = $('<div></div>').addClass('col-small').html(j + 1);
        let col2 = $('<div></div>').html(reqItems[j].quantity);
        let col3 = $('<div></div>').html(reqItems[j].part);
        let col4 = $('<div></div>').html(reqItems[j].stock);
        let col5 = $('<div></div>').html(reqItems[j].units);
        let col6 = $('<div></div>').addClass('col-small').html($('<i class="fas fa-times-circle btn-close"></i>').click(() => { removeItem(j) }));
        itemRow.append(col1, col2, col3, col4, col5, col6);
        $('#tbl-content').append(itemRow);
    }
}

function removeItem(index) {
    reqItems.splice(index, 1);
    renderTable();
}

function selectRow(j) {
    if (selectedRow !== j) {
        $('#cquantity').val(reqItems[j].quantity);
        $('#cpart').val(reqItems[j].part);
        $('#cstock').val(reqItems[j].stock);
        $('#cunits').val(reqItems[j].units);
        $('#cdescription').val(reqItems[j].description);
        selectedRow = j;
    } else {
        $('#cquantity').val('');
        $('#cpart').val('');
        $('#cstock').val('');
        $('#cunits').val('');
        $('#cdescription').val('');
        selectedRow = null;
    }
    renderTable();
}