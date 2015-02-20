$(function(){
    var content_panel = $('.content-wrapper');
    var inverse_y = -462;
    var normal_y = -274;
    var post_title = $("#post-title");
    var effect  = "animated fadeIn";
    var oldArticleName = "MAKALA";
    var articles = $(".articles");
    var eski ;
    var reset_article_class = "articles col-xs-9";
    var date = $("#date");

    var eski_date ;
    var interval_for_dates ;
    date.html(moment().format('dddd , LL'));
    $("body").delegate('.soma-zaidi','click',function(){
        var id = $(this).attr('data-id');
        console.log(id);
        $.ajax({
            url:'site/get_post/',
            data : {id : id},
            type:'POST',
            success: function(data){
                var article = $.parseJSON(data);
                console.log(article);
                content_panel.animate({marginTop:inverse_y});

                setTimeout(function(){
                    $("#rudi").html('<span class="rudi kidole animated fadeInRight"><i class="fa fa-chevron-left"></i> Rudi</span>');
                    post_title.html(article.title).addClass(effect);
                },700);
                eski = articles.html();
                eski_date = date.html();
                interval_for_dates = setInterval(function(){
                    date.html(moment(article.created_date).fromNow());
                },1000);


                setTimeout(function(){
                    articles.attr("class",reset_article_class);//clear them out
                    articles.html("<h3>"+article.title+"</h3>"+article.content).addClass("animated fadeIn");
                },1000);


            },
            error: function(){
                console.log("Hata Oldu");
            }
        });
    });

    content_panel.delegate('.rudi','click',function(){


        var rudi = $(".rudi");
        post_title.removeClass(effect);
        rudi.addClass('fadeOutLeft');
        var effetc_2 = "animated fadeInRight";


        setTimeout(function(){
            clearInterval(interval_for_dates);

            rudi.remove();
            post_title.html(oldArticleName).addClass("animated fadeInRight");
            date.html(moment().format('dddd ,LL'));
        },800);

        setTimeout(function(){content_panel.animate({marginTop:normal_y});},800);

        setTimeout(function(){
            articles.removeClass(effetc_2).html(eski).addClass(effetc_2);
        },1200);
    });
});