
function rafraichir(numArticle,titrearticle)
{
    $('.zoneArticle').load("article_detail.php?article=" + numArticle);
    window.document.title="Dzongkapa : " + titrearticle;
    
}
