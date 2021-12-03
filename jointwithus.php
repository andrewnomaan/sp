<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>समाजवादी बुलेटिन - समाजवादी पार्टी, बिजनौर</title>
<?php include 'header.php'; 
  $assets='assets/img/downloads/';
?>
<style>
    .join {
    background: #fff;
    border: 2px solid #e40000;
    padding: 12px 35px !important;
    transition: 0.4s;
    background: #e40000;
    color: #fff;
    border-radius: 4px;
    margin:0px 10px;
    /* width:200px; */
}
</style>
<main id="main">
    <section id="" class="section-bg">
     <div class="container">
     <div class="section-title">
            <h2>सदस्य बनें</h2>
        </div>
    <form>
     <div class="row justify-content-center">   
  <div class="form-group col-md-10">
    <label for="exampleFormControlInput1" class="pb-1">आपका नाम</label>
    <input type="email" class="form-control" name="name" id="exampleFormControlInput1" placeholder="आपका नाम">
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlInput1" class="pb-1">ईमेल</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="ईमेल">
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlInput1" class="pb-1">फ़ोन</label>
    <input type="number" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="फ़ोन">
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlInput1" class="pb-1">राज्य का नाम</label>
    <input type="text" class="form-control" name="state" id="exampleFormControlInput1" placeholder="राज्य का नाम">
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlInput1" class="pb-1">गांव/शहर का नाम</label>
    <input type="number" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="गांव/शहर का नाम">
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlSelect1" class="pb-1">जिले का नाम</label>
    <select class="form-control" id="district">
      <option>-चुनते हैं-</option>
      <option>सहारनपुर</option>
      <option>शामली</option>
      <option>मुजफ्फरनगर</option>
      <option>बिजनौर</option>
      <option>मुरादाबाद</option>
      <option>संभल</option>
      <option>रामपुर</option>
      <option>अमरोहा</option>
      <option>मेरठ</option>
      <option>बागपत</option>
      <option>फैजाबाद</option>
      <option>गाज़ियाबाद</option>
      <option>हापुड़</option>
      <option>गौतमबुद्ध नगर</option>
      <option>बुलंदशहर</option>
      <option>अलीगढ़</option>
      <option>हाथरस</option>
      <option>मथुरा</option>
      <option>आगरा</option>
      <option>फिरोजाबाद</option>
      <option>कासगंज</option>
      <option>एटा</option>
      <option>मैनपुरी</option>
      <option>बदायूं</option>
      <option>बरेली</option>
      <option>पीलीभीत</option>
      <option>शाहजहांपुर</option>
      <option>लखीमपुर खीरी</option>
      <option>सीतापुर</option>
      <option>हरदोई</option>
      <option>उन्नाव</option>
      <option>लखनऊ</option>
      <option>राय बरेली</option>
      <option>अमेठी</option>
      <option>फर्रुखाबाद</option>
      <option>कन्नौज</option>
      <option>इटावा</option>
      <option>औरैया</option>
      <option>कानपुर देहात</option>
      <option>कानपुर ग्रामीण</option>
      <option>कानपुर नगर</option>
      <option>जालौन</option>
      <option>झाँसी</option>
      <option>ललितपुर</option>
      <option>हमीरपुर</option>
      <option>महोबा</option>
      <option>बाँदा</option>
      <option>चित्रकूट</option>
      <option>फतेहपुर</option>
      <option>प्रतापगढ</option>
      <option>कौशाम्बी</option>
      <option>इलाहाबाद</option>
      <option>बाराबंकी</option>
      <option>अम्बेडकर नगर</option>
      <option>बहराइच</option>
      <option>श्रावस्ती</option>
      <option>बलरामपुर</option>
      <option>गोंडा</option>
      <option>सिद्धार्थनगर</option>
      <option>बस्ती</option>
      <option>संत कबीरनगर</option>
      <option>महाराजगंज</option>
      <option>गोरखपुर</option>
      <option>कुशीनगर</option>
      <option>देवरिया</option>
      <option>आजमगढ़</option>
      <option>मऊ</option>
      <option>बलिया</option>
      <option>जौनपुर</option>
      <option>ग़ाज़ीपुर</option>
      <option>चंदौली</option>
      <option>वाराणसी</option>
      <option>भदोही</option>
      <option>मिर्ज़ापुर</option>
      <option>सोनभद्र</option>
    </select>
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlSelect1" class="pb-1">निर्वाचन क्षेत्र का नाम</label>
    <select class="form-control" id="nirvachan">
      
</select>
</div>
<div class="col-md-10 pt-4">
<button type="submit" class="btn join">सबमिट</button>
<button type="reset" class="btn join">रीसेट</button>
</div>
</div>

</form>
</div>
    </section>
</main>
<?php include('footer.php') ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
       var district=document.getElementById('district');
       district.addEventListener('change',()=>{
        console.log(district.value);
        if(district.value=="सहारनपुर"){
            document.getElementById('nirvachan').innerHTML=' <option>बेहत</option>'+
            '<option>नकुर</option>'+
            '<option>सहारनपुर नगर</option>'+
            '<option>सहारनपुर देहात</option>'+
            '<option>देवबंद</option>'+
            '<option>रामपुर निहारन</option>'+
            '<option>गंगोह</option>';
        }
        else if(district.value=="शामली"){
            document.getElementById('nirvachan').innerHTML=' <option>कैराना</option>'+
            '<option>थाना भवन</option>'+
            '<option>शामली</option>';
        }
        else if(district.value=="मुजफ्फरनगर"){
            document.getElementById('nirvachan').innerHTML=' <option>बुढाना</option>'+
            '<option>चरथावल</option>'+
            '<option>पुरकाज़ी</option>'+
            '<option>मुजफ्फरनगर</option>'+
            '<option>खतौली</option>'+
            '<option>मीरापुर</option>';
        }
        else if(district.value=="बिजनौर"){
            document.getElementById('nirvachan').innerHTML=' <option>नजीबाबाद</option>'+
            '<option>नगीना</option>'+
            '<option>बढ़ापुर</option>'+
            '<option>धामपुर</option>'+
            '<option>नहटौर</option>'+
            '<option>बिजनौर</option>'+
            '<option>चांदपुर</option>'+
            '<option>नूरपुर</option>';
        }
        else if(district.value=="मुरादाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option>काँठ</option>'+
            '<option>ठाकुर द्वार</option>'+
            '<option>मुरादाबाद ग्रामीण</option>'+
            '<option>मुरादाबाद नगर</option>';
        }
        else if(district.value=="संभल"){
            document.getElementById('nirvachan').innerHTML=' <option>कुंदरकी</option>'+
            '<option>बिलारी</option>'+
            '<option>चंदौसी</option>'+
            '<option>अस्मौली</option>'+
            '<option>संभल</option>';
        }
        else if(district.value=="रामपुर"){
            document.getElementById('nirvachan').innerHTML=' <option>स्वर</option>'+
            '<option>चमरौवा</option>'+
            '<option>बिलासपुर</option>'+
            '<option>रामपुर</option>'+
            '<option>मिलक</option>';
        }
        else if(district.value=="अमरोहा"){
            document.getElementById('nirvachan').innerHTML=' <option>धनौरा</option>'+
            '<option>नौगावा</option>'+
            '<option>अमरोहा</option>'+
            '<option>हसनपुर</option>';
        }
        else if(district.value=="मेरठ"){
            document.getElementById('nirvachan').innerHTML=' <option>सिवाल खास</option>'+
            '<option>सरधाना</option>'+
            '<option>हस्तिनापुर</option>'+
            '<option>किठौर</option>'+
            '<option>मेरठ कैंट</option>'+
            '<option>मेरठ</option>'+
            '<option>मेरठ दक्षिण</option>';
        }
        else if(district.value=="बागपत"){
            document.getElementById('nirvachan').innerHTML=' <option>छपरौली</option>';
        }
        else if(district.value=="फैजाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option>बड़ौत</option>';
        }
        else if(district.value=="गाज़ियाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option>लौनी</option>'+
            '<option>मुरादनगर</option>'+
            '<option>साहिबाबाद</option>'+
            '<option>गाज़ियाबाद</option>'+
            '<option>मोदीनगर</option>';
        }
        else if(district.value=="हापुड़"){
            document.getElementById('nirvachan').innerHTML=' <option>धौलाना</option>'+
            '<option>हापुड़</option>'+
            '<option>गढ़मुक्तेश्वर</option>';
        }
        else if(district.value=="गौतमबुद्ध नगर"){
            document.getElementById('nirvachan').innerHTML=' <option>नोएडा</option>'+
            '<option>दादरी</option>'+
            '<option>ज़ेवर</option>';
        }
        else if(district.value=="बुलंदशहर"){
            document.getElementById('nirvachan').innerHTML=' <option>सिकंदराबाद</option>'+
            '<option>बुलंदशहर</option>'+
            '<option>स्याना</option>'+
            '<option>अनूप शहर</option>'+
            '<option>दीबाई</option>'+
            '<option>शिकारपुर</option>'+
            '<option>खुर्जा</option>';
        }
        else if(district.value=="अलीगढ़"){
            document.getElementById('nirvachan').innerHTML=' <option>खैर</option>'+
            '<option>बरौली</option>'+
            '<option>अतरौली</option>'+
            '<option>छपरा</option>'+
            '<option>कोइल</option>'+
            '<option>अलीगढ़</option>'+
            '<option>इग्लास</option>';
        }
        else if(district.value=="हाथरस"){
            document.getElementById('nirvachan').innerHTML=' <option>हाथरस</option>'+
            '<option>सादाबाद</option>'+
            '<option>सिकंदरा-राव</option>';
        }
        else if(district.value=="मथुरा"){
            document.getElementById('nirvachan').innerHTML=' <option>छाता</option>'+
            '<option>मांट</option>'+
            '<option>गोवर्धन</option>'+
            '<option>मथुरा</option>'+
            '<option>बलदेव</option>';
        }
        else if(district.value=="आगरा"){
            document.getElementById('nirvachan').innerHTML=' <option>एतमादपुर</option>'+
            '<option>आगरा कैंट</option>'+
            '<option>आगरा दक्षिण</option>'+
            '<option>आगरा उत्तर</option>'+
            '<option>आगरा ग्रामीण</option>'+
            '<option>फतेहपुर सीकरी</option>'+
            '<option>खेरागढ़</option>'+
            '<option>फतेहाबाद</option>'+
            '<option>बाह</option>';
        }
        else if(district.value=="फिरोजाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option>टुंडला</option>'+
            '<option>जसराना</option>'+
            '<option>फिरोजाबाद</option>'+
            '<option>शिकोहाबाद</option>'+
            '<option>सिरसागंज</option>';
        }
        else if(district.value=="कासगंज"){
            document.getElementById('nirvachan').innerHTML=' <option>कासगंज</option>'+
            '<option>अमापुर</option>'+
            '<option>पटियाली</option>';
        }
        else if(district.value=="एटा"){
            document.getElementById('nirvachan').innerHTML=' <option>अलीगंज</option>'+
            '<option>एटा</option>'+
            '<option>मरहारा</option>'+
            '<option>जलेसर</option>';
        }
        else if(district.value=="मैनपुरी"){
            document.getElementById('nirvachan').innerHTML=' <option>मैनपुरी</option>'+
            '<option>भोगाँव</option>'+
            '<option>किशनी</option>'+
            '<option>करहल</option>';
        }
        else if(district.value=="बदायूं"){
            document.getElementById('nirvachan').innerHTML=' <option>गुन्नौर</option>'+
            '<option>बिसौली</option>'+
            '<option>सहसवान</option>'+
            '<option>बिल्सी</option>'+
            '<option>बदायूं</option>'+
            '<option>शेखूपुर</option>'+
            '<option>दातागंज</option>';
        }
        else if(district.value=="बरेली"){
            document.getElementById('nirvachan').innerHTML=' <option>बहेरी</option>'+
            '<option>मीरगंज</option>'+
            '<option>भोजीपुरा</option>'+
            '<option>नवाबगंज</option>'+
            '<option>फरीदपुर</option>'+
            '<option>बरेली</option>'+
            '<option>बरेली कैंट</option>'+
            '<option>आँवला</option>';
        }
        else if(district.value=="पीलीभीत"){
            document.getElementById('nirvachan').innerHTML=' <option>पीलीभीत</option>'+
            '<option>बरखेड़ा</option>'+
            '<option>पूरनपुर</option>'+
            '<option>बीसलपुर</option>';
        }
        else if(district.value=="शाहजहांपुर"){
            document.getElementById('nirvachan').innerHTML=' <option>कटरा</option>'+
            '<option>जलालाबाद</option>'+
            '<option>तिलहर</option>'+
            '<option>पोवाया</option>'+
            '<option>ददरौल</option>';
        }
        else if(district.value=="लखीमपुर खीरी"){
            document.getElementById('nirvachan').innerHTML=' <option>पलिया</option>'+
            '<option>निधासन</option>'+
            '<option>गोला गोकर्णनाथ</option>'+
            '<option>श्रीनगर</option>'+
            '<option>धौरहरा</option>'+
            '<option>लखीमपुर</option>'+
            '<option>कस्ता</option>'+
            '<option>मोहम्मदी</option>';
        }
        else if(district.value=="सीतापुर"){
            document.getElementById('nirvachan').innerHTML=' <option>महोली</option>'+
            '<option>सीतापुर</option>'+
            '<option>हरगाओ</option>'+
            '<option>लहरपुर</option>'+
            '<option>विस्नवा</option>'+
            '<option>सेवाता</option>'+
            '<option>महमूदाबाद</option>'+
            '<option>सिधौली</option>'+
            '<option>मिश्रीख</option>';
        }
        else if(district.value=="हरदोई"){
            document.getElementById('nirvachan').innerHTML=' <option>सवैजपुर</option>'+
            '<option>शाहाबाद</option>'+
            '<option>हरदोई</option>'+
            '<option>गोपामऊ</option>'+
            '<option>साण्डी</option>'+
            '<option>बिलग्राम मल्लनवा</option>'+
            '<option>बालामाऊ</option>'+
            '<option>संडीला</option>';
        }
        else if(district.value=="हरदोई"){
            document.getElementById('nirvachan').innerHTML=' <option>सवैजपुर</option>'+
            '<option>शाहाबाद</option>'+
            '<option>हरदोई</option>'+
            '<option>गोपामऊ</option>'+
            '<option>साण्डी</option>'+
            '<option>बिलग्राम मल्लनवा</option>'+
            '<option>बालामाऊ</option>'+
            '<option>संडीला</option>';
        }
        else if(district.value=="उन्नाव"){
            document.getElementById('nirvachan').innerHTML=' <option>बांगरमऊ</option>'+
            '<option>सफ़ीपुर</option>'+
            '<option>मोहन</option>'+
            '<option>उन्नाव</option>'+
            '<option>भगवंत नगर</option>'+
            '<option>पूर्वा</option>';
        }
        else if(district.value=="लखनऊ"){
            document.getElementById('nirvachan').innerHTML=' <option>मलीहाबाद</option>'+
            '<option>बख्शी का तालाब</option>'+
            '<option>सरोजिनी नगर</option>'+
            '<option>लखनऊ पश्चिम</option>'+
            '<option>लखनऊ उत्तर</option>'+
            '<option>लखनऊ पूर्व</option>'+
            '<option>लखनऊ सेंट्रल</option>'+
            '<option>लखनऊ कैंट</option>'+
            '<option>मोहनलाल गंज</option>';
        }
        else if(district.value=="राय बरेली"){
            document.getElementById('nirvachan').innerHTML=' <option>बछरावा</option>'+
            '<option>हरचंदपुर</option>'+
            '<option>राय बरेली</option>'+
            '<option>सारेनी</option>'+
            '<option>ऊंचाहार</option>'+
            '<option>सलोन</option>';
        }
        else if(district.value=="अमेठी"){
            document.getElementById('nirvachan').innerHTML=' <option>तिलोई</option>'+
            '<option>जगदीशपुर</option>'+
            '<option>गोरीगंज</option>'+
            '<option>अमेठी</option>';
        }
        else if(district.value=="सुल्तानपुर"){
            document.getElementById('nirvachan').innerHTML=' <option>इसौली</option>'+
            '<option>सुल्तानपुर</option>'+
            '<option>सदर</option>'+
            '<option>लम्भुआ</option>'+
            '<option>कादीपुर</option>';
        }
        else if(district.value=="फर्रुखाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option>कायमगंज</option>'+
            '<option>अमृतपुर</option>'+
            '<option>फर्रुखाबाद</option>'+
            '<option>भोजपुर</option>';
        }
        else if(district.value=="कन्नौज"){
            document.getElementById('nirvachan').innerHTML=' <option>छिबरामऊ</option>'+
            '<option>तिरवा</option>'+
            '<option>कन्नौज</option>';
        }
        else if(district.value=="इटावा"){
            document.getElementById('nirvachan').innerHTML=' <option>जसवंतपुर</option>'+
            '<option>इटावा</option>'+
            '<option>भरथना</option>';
        }
        else if(district.value=="औरैया"){
            document.getElementById('nirvachan').innerHTML=' <option>विधुना</option>'+
            '<option>दिबियापुर</option>'+
            '<option>औरैया</option>';
        }
        else if(district.value=="कानपुर देहात"){   
            document.getElementById('nirvachan').innerHTML=' <option> रसूलाबाद</option>'+
            '<option>अकबरपुरनिया</option>'+
            '<option>सिकंदरा</option>'+
            '<option>भोगनीपुर</option>';
        }
        else if(district.value=="कानपुर ग्रामीण"){   
            document.getElementById('nirvachan').innerHTML=' <option> बिल्होर</option>'+
            '<option>बिथपुर</option>'+
            '<option>कल्याणपुर</option>';
        }
        else if(district.value=="कानपुर नगर"){  
            document.getElementById('nirvachan').innerHTML=' <option>  गोविंद नगर</option>'+
            '<option>सीसामाऊ</option>'+
            '<option>आर्य नगर</option>'+
            '<option>किदवई नगर</option>'+
            '<option>कानपुर कैंट</option>'+
            '<option>महाराजपुर </option>';
        }
        else if(district.value=="जालौन"){ 
            document.getElementById('nirvachan').innerHTML=' <option>माधोगढ</option>'+
            '<option>कलपी</option>'+
            '<option>उरई </option>';
        }
        else if(district.value=="झाँसी"){ 
            document.getElementById('nirvachan').innerHTML=' <option> बबीना</option>'+
            '<option> झांसी नगर</option>'+
            '<option> मऊरानीपुर</option>'+
            '<option>गरौठा</option>';
        }
        else if(district.value=="ललितपुर"){ 
            document.getElementById('nirvachan').innerHTML=' <option> बबीना</option>'+
            '<option>महरोनी</option>';
        }
        else if(district.value=="हमीरपुर"){ 
            document.getElementById('nirvachan').innerHTML=' <option> हमीरपुर</option>'+
            '<option>राठ</option>';
        }
        else if(district.value=="महोबा"){ 
            document.getElementById('nirvachan').innerHTML=' <option> महोबा</option>'+
            '<option>चरखारी</option>';
        }
        else if(district.value=="बाँदा"){ 
            document.getElementById('nirvachan').innerHTML=' <option>तिन्दवारी</option>'+
            '<option>बबेरू</option>'+
            '<option>नारायणी</option>'+
            '<option>बाँदा</option>';
        }
        else if(district.value=="चित्रकूट"){ 
            document.getElementById('nirvachan').innerHTML=' <option>चित्रकूट</option>'+
            '<option>मनिकपुर</option>';
        }
        else if(district.value=="फतेहपुर"){ 
            document.getElementById('nirvachan').innerHTML=' <option>  जहानाबाद</option>'+
            '<option>बिंदकी</option>'+
            '<option>फतेहपुर</option>'+
            '<option>आया शाह</option>'+
            '<option>हुसैनगंज</option>'+
            '<option>खागा</option>';
        }
        else if(district.value=="प्रतापगढ"){ 
            document.getElementById('nirvachan').innerHTML=' <option> रामपुर खास</option>'+
            '<option>बाबागंज</option>'+
            '<option>कुंडा</option>'+
            '<option>विश्वनाथ गंज</option>'+
            '<option>प्रतापगढ</option>'+
            '<option>पटी</option>'+
            '<option>रानीगंज</option>';
        }
        else if(district.value=="कौशाम्बी"){ 
            document.getElementById('nirvachan').innerHTML=' <option>सिराथू</option>'+
            '<option>मंजनपुर</option>'+
            '<option>चायल</option>';
        }
        else if(district.value=="इलाहाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option>फाफामाऊ</option>'+
            '<option>सौरंवी</option>'+
            '<option>फूलपुर</option>'+
            '<option>प्रताप पुरी</option>'+
            '<option>हंडिया</option>'+
            '<option>मेजा</option>'+
            '<option>करछना</option>'+
            '<option>इलाहाबाद पश्चिम</option>'+
            '<option>इलाहाबाद उत्तर</option>'+
            '<option>इलाहाबाद दक्षिण</option>'+
            '<option>बारा</option>'+
            '<option>कोरांव</option>';
        }
        else if(district.value=="बाराबंकी"){
            document.getElementById('nirvachan').innerHTML=' <option> कुरसी</option>'+
            '<option>रामनगर</option>'+
            '<option>बाराबंकी</option>'+
            '<option>जैदपुर</option>'+
            '<option>हैदरगढ</option>'+
            '<option>दरियाबाद</option>';
        }
        else if(district.value=="अम्बेडकर नगर"){
            document.getElementById('nirvachan').innerHTML=' <option> कटेहरी</option>'+
            '<option>टांडा</option>'+
            '<option>अलापुर</option>'+
            '<option>जलालपुर</option>'+
            '<option>अकबरपुर</option>';
        }
        else if(district.value=="बहराइच"){
            document.getElementById('nirvachan').innerHTML=' <option> बलहा</option>'+
            '<option>नानपारा</option>'+
            '<option>मटेरा</option>'+
            '<option>महसी</option>'+
            '<option>बहराइच</option>'+
            '<option>प्रयागपुर</option>'+
            '<option>कैसरगंज</option>';
        }
        else if(district.value=="श्रावस्ती"){
            document.getElementById('nirvachan').innerHTML=' <option>श्रावस्ती</option>'+
            '<option>भिंगा</option>';
        }
        else if(district.value=="बलरामपुर"){
            document.getElementById('nirvachan').innerHTML=' <option> मऊ</option>'+
            '<option>गौसरी</option>'+
            '<option>उतरौला</option>'+
            '<option>बलरामपुर</option>';
        }
        else if(district.value=="गोंडा"){
            document.getElementById('nirvachan').innerHTML=' <option>  महनाओ</option>'+
            '<option>गोंडा</option>'+
            '<option>कटरा बाजार</option>'+
            '<option>करनालगंज</option>'+
            '<option>तरबगंज</option>'+
            '<option>मनकापुर</option>'+
            '<option>गौरा</option>';
        }
        else if(district.value=="सिद्धार्थनगर"){
            document.getElementById('nirvachan').innerHTML=' <option> शोहरथगढ</option>'+
            '<option>कपिलवसतु</option>'+
            '<option>बंसी</option>'+
            '<option>इतवा</option>'+
            '<option>डुमरियागंज</option>';
        }
        else if(district.value=="बस्ती"){
            document.getElementById('nirvachan').innerHTML=' <option>हरैया</option>'+
            '<option>कप्तानगंज</option>'+
            '<option>रुधौली</option>'+
            '<option>बस्ती सदरी</option>'+
            '<option>महादेवा</option>';
        }
        else if(district.value=="संत कबीरनगर"){
            document.getElementById('nirvachan').innerHTML=' <option>मेंधावल</option>'+
            '<option>खलीलाबाद</option>'+
            '<option>घंघाटा</option>';
        }
        else if(district.value=="महाराजगंज"){
            document.getElementById('nirvachan').innerHTML=' <option>फरेंदा</option>'+
            '<option>नौटेनवा</option>'+
            '<option>सिसवान</option>'+
            '<option>महाराजगंज</option>'+
            '<option>पनियारा</option>';
        }
        else if(district.value=="गोरखपुर"){
            document.getElementById('nirvachan').innerHTML=' <option>खजानी</option>'+
            '<option>कैम्पियरगंज</option>'+
            '<option>पिपराइच</option>'+
            '<option>गोरखपुर शहर</option>'+
            '<option>गोरखपुर ग्रामीण</option>'+
            '<option>सहजनवा</option>'+
            '<option>चौरा चौरी</option>'+
            '<option>बांसगांव</option>'+
            '<option>चिल्लूपर</option>';
        }
        else if(district.value=="कुशीनगर"){
            document.getElementById('nirvachan').innerHTML=' <option>खडडा</option>'+
            '<option>पडरौना</option>'+
            '<option>तमकुहीराज</option>'+
            '<option>फाज़िल नगर</option>'+
            '<option>कुशीनगर</option>'+
            '<option>हटा</option>'+
            '<option>रामकोला</option>';
        }
        else if(district.value=="देवरिया"){
            document.getElementById('nirvachan').innerHTML=' <option> रुद्रपुर</option>'+
            '<option>देवरिया</option>'+
            '<option>पथरादेवा</option>'+
            '<option>रामपुर कारखाना</option>'+
            '<option>भाटपर रानी</option>'+
            '<option>सलेमपुर</option>'+
            '<option>बरहाज</option>';
        }
        else if(district.value=="आजमगढ़"){
            document.getElementById('nirvachan').innerHTML=' <option> अतरौलिया</option>'+
            '<option>गोपालपुर</option>'+
            '<option>सागदी</option>'+
            '<option>मुबारकपुर</option>'+
            '<option>आजमगढ</option>'+
            '<option>निजामाबाद</option>'+
            '<option>फूलपुरपवई</option>'+
            '<option>दीदारगंज</option>'+
            '<option>लालगंज</option>'+
            '<option>मेह नगर</option>';
        }
        else if(district.value=="मऊ"){
            document.getElementById('nirvachan').innerHTML=' <option>  मधुबन</option>'+
            '<option>घोषी</option>'+
            '<option>मोहम्मदाबाद गोहाना</option>'+
            '<option>मऊ</option>';
        }
        else if(district.value=="बलिया"){
            document.getElementById('nirvachan').innerHTML=' <option>बेल्थारारोड</option>'+
            '<option>रसदा</option>'+
            '<option>सिकंदरपुर</option>'+
            '<option>फैफ़ना</option>'+
            '<option>बलियानगर</option>'+
            '<option>बांसडीह</option>'+
            '<option>बैरिया</option>';
        }
        else if(district.value=="जौनपुर"){
            document.getElementById('nirvachan').innerHTML=' <option>बदलापुर</option>'+
            '<option>शाहगंज</option>'+
            '<option>जौनपुर</option>'+
            '<option>मल्हानी</option>'+
            '<option>मुंगरबादशाहपुर</option>'+
            '<option>मछलीशहर</option>'+
            '<option>मारियाहु</option>'+
            '<option>जाफराबाद</option>'+
            '<option>केराकाट</option>';
        }
        else if(district.value=="ग़ाज़ीपुर"){
            document.getElementById('nirvachan').innerHTML=' <option>जखनिया</option>'+
            '<option>गाज़ीपुर</option>'+
            '<option>जंगीपुर</option>'+
            '<option>मल्हानी</option>'+
            '<option>जहराबाद</option>'+
            '<option>मोहम्मदाबाद</option>'+
            '<option>जमानिया</option>';
        }
        else if(district.value=="चंदौली"){
            document.getElementById('nirvachan').innerHTML=' <option>सकलडीहा</option>'+
            '<option>मुगलसराय</option>'+
            '<option>सैयादराजा</option>'+
            '<option>चकिया</option>';
        }
        else if(district.value=="वाराणसी"){
            document.getElementById('nirvachan').innerHTML=' <option>पिंड</option>'+
            '<option>अजगरा</option>'+
            '<option>शिवपुर</option>'+
            '<option>रोहनिया</option>'+
            '<option>वाराणसी उत्तर</option>'+
            '<option>वाराणसी दक्षिण</option>'+
            '<option>वाराणसी कैंट</option>'+
            '<option>सेवापुरी</option>';
        }
        else if(district.value=="भदोही"){
            document.getElementById('nirvachan').innerHTML=' <option>भदोही</option>'+
            '<option>ज्ञानपुर</option>'+
            '<option>उरई</option>';
        }
        else if(district.value=="मिर्ज़ापुर"){
            document.getElementById('nirvachan').innerHTML=' <option>छानबे</option>'+
            '<option>मिर्ज़ापुर</option>'+
            '<option>मांझावा</option>'+
            '<option>चुनार</option>'+
            '<option>मदिहान</option>';
        }
        else if(district.value=="सोनभद्र"){
            document.getElementById('nirvachan').innerHTML=' <option>घोरावल</option>'+
            '<option>रोबेर्त्स्गंज</option>'+
            '<option>ओबेरा</option>'+
            '<option>दुधि</option>';
        }
        else{
            document.getElementById('nirvachan').innerHTML="";
        }
       })
  </script>
    
</body>
</html>