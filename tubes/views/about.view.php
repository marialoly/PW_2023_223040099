<?php
require('partials/header.php');
require('partials/navbar.php');
?>
<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src='img/Italian.jpg' class="about-image">
            </div>
            <div class="col-md-6">
                <div class="about-content"></div>
                <h3>Tentang Kami</h3>
                <p>Selamat datang di <span>Taste Trakker</span>! Di sini, kami akan membawa Anda dalam
                 perjalanan kuliner  yang memukau melalui kekayaan cita rasa, tradisi, dan keindahan masakan 
                 Italia yang telah menggoda selera lidah penikmat makanan di seluruh dunia. Kuliner Italia 
                 dikenal di seluruh dunia karena cita rasanya yang lezat dan beragam.<br> 
                <br>Setiap daerah di Italia memiliki kekhasan dan keunikan tersendiri dalam cara mereka 
                memasak dan menyajikan hidangan. Dari kota-kota sibuk seperti Roma dan Milan hingga desa-desa 
                pedesaan yang tenang, Anda akan menemukan beragam hidangan lezat yang menggambarkan keberagaman
                 budaya dan sejarah Italia <br> 
                <br>Beberapa hidangan Italia yang terkenal adalah Pasta dan pizza, namun kuliner Italia tidak 
                    hanyaa tentang Pasta dan Pizza. Negara ini juga terkenal dengan hidangan klasik seperti 
                    lasagna, rosotto, ossobucco, dan tiramisu. Bahan-bahan segar, rempah-rempah berkualitas 
                    tinggi, dan teknik memasak yang cermat adalah rahasia dibalik kelezatan hidangan Italia. 
            </div>
        </div>
    </div>
</div>
<style>
.about-section {
    background-color: 	#F5F5F5;
    padding: 40px 0;
   
}
.about-section h3{
    font-family: Century;
    color: firebrick;
    font-size: 25px;
    margin-bottom: 20px;
}
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}
.about-image {
    max-width: 100%;
    height: auto;
}

span {
    color: firebrick;
}
.about-section p {
    font-size: 17px;
    line-height: 1.3;
}
</style>
<?php 
require('partials/footer.php');
?>