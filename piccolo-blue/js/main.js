// bind to C2's bootstrap event in order to get a reference to the API object
$('.cycle-slideshow').on('cycle-bootstrap', function(e, opts, API) {
    // add a new method to the C2 API:
    API.customGetImageSrc = function( slideOpts, opts, slideEl ) {
        return $( slideEl ).attr('title');
    }
});
$( ".lab-container" ).click(function() {
    if ($(window).width() > 900) {
        $( ".subscribe-form" ).toggle('slow', 'swing');
    } else {
        $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
    }
    $( ".subscribe").mouseleave(function(){
        $( ".subscribe-form" ).hide('slow', 'swing');
    });
});

var newYear = new Date();
newYear = new Date(newYear.getFullYear() + 1, 1 - 1, 1);
$('.timer').countdown({until: newYear, layout:'<div><p class="text">{dl}</p> <p class="number">{d<}{dn}</p></div>     <div><p class="text">{hl}</p><p class="number">{d>} {hn}</p></div>    <div><p class="text">{ml}</p><p class="number">{mn}</p></div>    <div><p class="text">{sl}</p><p class="number">{sn}</p></div>'});

pageLoading({
    barColor:'#3D3C3C', //Bar'ın rengini belirler
    barTop:'75px',     //Barın top değerini belirler. Tüm yükseklik birimleri kulanılabilir(px,%,...)
    textTop:'100px',    //Text'in top değerini belirler. Tüm yükseklik birimleri kulanılabilir(px,%,...)
    backColor:'rgba(255,255, 255, 0.90)', //Arka perde rengini belirler.
    backBarColor:'#dfe8ea',     //Bar'ın arka rengini belirler.
    text:'Loading <b>{process} %</b>',    //Text'in içeriğini belirler. {process} = yüklenme değeri.
    textVisible:false,   //false durumunda Text'i kaldırır.
    loadOut:true    //true durumunda sayfanın ilk açılışının tamamlanmasıyla otomatik biter.
});