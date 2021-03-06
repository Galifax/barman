<?php

/* @var $this yii\web\View */

$this->title = 'Barmen';
?>

<div class="container">
    <div class="row" style=" margin:20px">
        <div class="col-xs-12">
            <button class="btn btn-small btn-danger" data-toggle="portfilter" data-target="all">
                All
            </button>
            <button class="btn btn-small btn-danger" data-toggle="portfilter" data-target="art">
                Websites
            </button>
            <button class="btn btn-small btn-danger" data-toggle="portfilter" data-target="media">
                Brochures
            </button>
            <button class="btn btn-small btn-danger" data-toggle="portfilter" data-target="brand">
                Logo design / Brand Collaterals
            </button>
        </div>
    </div>

    <div class="col-md-4" data-tag='brand'>
        <img src="http://placehold.it/450x250" class="img-responsive" alt="img">
    </div>
    <div class="col-md-4" data-tag='media'>
        <img src="http://placehold.it/450x250" class="img-responsive" alt="img">
    </div>
    <div class="col-md-4" data-tag='art'>
        <img src="http://placehold.it/450x250" class="img-responsive" alt="img">
    </div>




    <div class="col-md-4" data-tag='art'>
        <img src="http://placehold.it/450x250" class="img-responsive" alt="img">
    </div>
    <div class="col-md-4" data-tag='brand'>
        <img src="http://placehold.it/450x250" class="img-responsive" alt="img">
    </div>
    <div class="col-md-4" data-tag='media'>
        <img src="http://placehold.it/450x250" class="img-responsive" alt="img">
    </div>
    <div class="col-md-4" data-tag='media'>
        <img src="http://placehold.it/450x250" class="img-responsive" alt="img">
    </div>
    <div class="col-md-4" data-tag='brand'>
        <img src="http://placehold.it/450x250" class="img-responsive" alt="img">
    </div>


</div>

<script>
    !function(d){var c="portfilter";
    var b=function(e){this.$element=d(e);
    this.stuff=d("[data-tag]");
    this.target=this.$element.data("target")||""};
    b.prototype.filter=function(g){var e=[],f=this.target;
    this.stuff.fadeOut("fast").promise().done(function(){d(this).each(function(){if(d(this).data("tag")==f||f=="all"){e.push(this)}});
    d(e).show()})};var a=d.fn[c];d.fn[c]=function(e){return this.each(function(){var g=d(this),f=g.data(c);
    if(!f){g.data(c,(f=new b(this)))}if(e=="filter"){f.filter()}})};
    d.fn[c].defaults={};d.fn[c].Constructor=b;d.fn[c].noConflict=function(){d.fn[c]=a;return this};d(document).on("click.portfilter.data-api","[data-toggle^=portfilter]",function(f){d(this).portfilter("filter")})}(window.jQuery);

</script>