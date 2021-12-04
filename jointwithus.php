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
    <form action="action.php" method="post">
     <div class="row justify-content-center">   
  <div class="form-group col-md-10">
    <label for="exampleFormControlInput1" class="pb-1">आपका नाम</label>
    <input type="text" name="name" class="form-control" name="name" id="exampleFormControlInput1" placeholder="आपका नाम" required>
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlInput1" class="pb-1">ईमेल</label>
    <input type="email" name="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="ईमेल" required>
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlInput1" class="pb-1">फ़ोन</label>
    <input type="number" name="mobile" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="फ़ोन" required>
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlInput1" class="pb-1">राज्य का नाम</label>
    <input type="text" name="state" class="form-control" name="state" id="exampleFormControlInput1" placeholder="राज्य का नाम" required>
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlInput1" class="pb-1">गांव/शहर का नाम</label>
    <input type="text" name="city" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="गांव/शहर का नाम" required>
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlSelect1" class="pb-1">जिले का नाम</label>
    <select class="form-control" id="district" name="district" required>
      <option value="">-चुनते हैं-</option>
      <option value="सहारनपुर">सहारनपुर</option>
      <option value="शामली">शामली</option>
      <option value="मुजफ्फरनगर">मुजफ्फरनगर</option>
      <option value="बिजनौर">बिजनौर</option>
      <option value="मुरादाबाद">मुरादाबाद</option>
      <option value="संभल">संभल</option>
      <option value="रामपुर">रामपुर</option>
      <option value="अमरोहा">अमरोहा</option>
      <option value="मेरठ">मेरठ</option>
      <option value="बागपत">बागपत</option>
      <option value="फैजाबाद">फैजाबाद</option>
      <option value="गाज़ियाबाद">गाज़ियाबाद</option>
      <option value="हापुड़">हापुड़</option>
      <option value="गौतमबुद्ध नगर">गौतमबुद्ध नगर</option>
      <option value="बुलंदशहर">बुलंदशहर</option>
      <option value="अलीगढ़">अलीगढ़</option>
      <option value="हाथरस">हाथरस</option>
      <option value="मथुरा">मथुरा</option>
      <option value="आगरा">आगरा</option>
      <option value="फिरोजाबाद">फिरोजाबाद</option>
      <option value="कासगंज">कासगंज</option>
      <option value="एटा">एटा</option>
      <option value="मैनपुरी">मैनपुरी</option>
      <option value="बदायूं">बदायूं</option>
      <option value="बरेली">बरेली</option>
      <option value="पीलीभीत">पीलीभीत</option>
      <option value="शाहजहांपुर">शाहजहांपुर</option>
      <option value="लखीमपुर खीरी">लखीमपुर खीरी</option>
      <option value="सीतापुर">सीतापुर</option>
      <option value="हरदोई">हरदोई</option>
      <option value="उन्नाव">उन्नाव</option>
      <option value="लखनऊ">लखनऊ</option>
      <option value="राय बरेली">राय बरेली</option>
      <option value="अमेठी">अमेठी</option>
      <option value="फर्रुखाबाद">फर्रुखाबाद</option>
      <option value="कन्नौज">कन्नौज</option>
      <option value="इटावा">इटावा</option>
      <option value="औरैया">औरैया</option>
      <option value="कानपुर देहात">कानपुर देहात</option>
      <option value="कानपुर ग्रामीण">कानपुर ग्रामीण</option>
      <option value="कानपुर नगर">कानपुर नगर</option>
      <option value="जालौन">जालौन</option>
      <option value="झाँसी">झाँसी</option>
      <option value="ललितपुर">ललितपुर</option>
      <option value="हमीरपुर">हमीरपुर</option>
      <option value="महोबा">महोबा</option>
      <option value="बाँदा">बाँदा</option>
      <option value="चित्रकूट">चित्रकूट</option>
      <option value="फतेहपुर">फतेहपुर</option>
      <option value="प्रतापगढ">प्रतापगढ</option>
      <option value="कौशाम्बी">कौशाम्बी</option>
      <option value="इलाहाबाद">इलाहाबाद</option>
      <option value="बाराबंकी">बाराबंकी</option>
      <option value="अम्बेडकर नगर">अम्बेडकर नगर</option>
      <option value="बहराइच">बहराइच</option>
      <option value="श्रावस्ती">श्रावस्ती</option>
      <option value="बलरामपुर">बलरामपुर</option>
      <option value="गोंडा">गोंडा</option>
      <option value="सिद्धार्थनगर">सिद्धार्थनगर</option>
      <option value="बस्ती">बस्ती</option>
      <option value="संत कबीरनगर">संत कबीरनगर</option>
      <option value="महाराजगंज">महाराजगंज</option>
      <option value="गोरखपुर">गोरखपुर</option>
      <option value="कुशीनगर">कुशीनगर</option>
      <option value="देवरिया">देवरिया</option>
      <option value="आजमगढ़">आजमगढ़</option>
      <option value="मऊ">मऊ</option>
      <option value="बलिया">बलिया</option>
      <option value="जौनपुर">जौनपुर</option>
      <option value="ग़ाज़ीपुर">ग़ाज़ीपुर</option>
      <option value="चंदौली">चंदौली</option>
      <option value="वाराणसी">वाराणसी</option>
      <option value="भदोही">भदोही</option>
      <option value="मिर्ज़ापुर">मिर्ज़ापुर</option>
      <option value="सोनभद्र">सोनभद्र</option>
    </select>
  </div>
  <div class="form-group col-md-5 pt-2">
    <label for="exampleFormControlSelect1" class="pb-1">निर्वाचन क्षेत्र का नाम</label>
    <select class="form-control" id="nirvachan" name="nirvachan">
      
</select>
</div>
<div class="col-md-10 pt-4">
<button type="submit" name="join_party" class="btn join">सबमिट</button>
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
            document.getElementById('nirvachan').innerHTML=' <option value="बेहत">बेहत</option>'+
            '<option value="नकुर">नकुर</option>'+
            '<option value="सहारनपुर नगर">सहारनपुर नगर</option>'+
            '<option value="सहारनपुर देहात">सहारनपुर देहात</option>'+
            '<option value="देवबंद">देवबंद</option>'+
            '<option value="रामपुर निहारन">रामपुर निहारन</option>'+
            '<option value="गंगोह">गंगोह</option>';
        }
        else if(district.value=="शामली"){
            document.getElementById('nirvachan').innerHTML=' <option value="कैराना">कैराना</option>'+
            '<option value="थाना भवन">थाना भवन</option>'+
            '<option value="शामली">शामली</option>';
        }
        else if(district.value=="मुजफ्फरनगर"){
            document.getElementById('nirvachan').innerHTML=' <option value="बुढाना">बुढाना</option>'+
            '<option value="चरथावल">चरथावल</option>'+
            '<option value="पुरकाज़ी">पुरकाज़ी</option>'+
            '<option value="मुजफ्फरनगर">मुजफ्फरनगर</option>'+
            '<option value="खतौली">खतौली</option>'+
            '<option value="मीरापुर">मीरापुर</option>';
        }
        else if(district.value=="बिजनौर"){
            document.getElementById('nirvachan').innerHTML=' <option value="नजीबाबाद">नजीबाबाद</option>'+
            '<option value="नगीना">नगीना</option>'+
            '<option value="बढ़ापुर">बढ़ापुर</option>'+
            '<option value="धामपुर">धामपुर</option>'+
            '<option value="नहटौर">नहटौर</option>'+
            '<option value="बिजनौर">बिजनौर</option>'+
            '<option value="चांदपुर">चांदपुर</option>'+
            '<option value="नूरपुर">नूरपुर</option>';
        }
        else if(district.value=="मुरादाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option value="काँठ">काँठ</option>'+
            '<option value="ठाकुर द्वार">ठाकुर द्वार</option>'+
            '<option value="मुरादाबाद ग्रामीण">मुरादाबाद ग्रामीण</option>'+
            '<option value="मुरादाबाद नगर">मुरादाबाद नगर</option>';
        }
        else if(district.value=="संभल"){
            document.getElementById('nirvachan').innerHTML=' <option value="कुंदरकी">कुंदरकी</option>'+
            '<option value="बिलारी">बिलारी</option>'+
            '<option value="चंदौसी">चंदौसी</option>'+
            '<option value="अस्मौली">अस्मौली</option>'+
            '<option value="संभल">संभल</option>';
        }
        else if(district.value=="रामपुर"){
            document.getElementById('nirvachan').innerHTML=' <option value="स्वर">स्वर</option>'+
            '<option value="चमरौवा">चमरौवा</option>'+
            '<option value="बिलासपुर">बिलासपुर</option>'+
            '<option value="रामपुर">रामपुर</option>'+
            '<option value="मिलक">मिलक</option>';
        }
        else if(district.value=="अमरोहा"){
            document.getElementById('nirvachan').innerHTML=' <option value="धनौरा">धनौरा</option>'+
            '<option value="नौगावा">नौगावा</option>'+
            '<option value="अमरोहा">अमरोहा</option>'+
            '<option value="हसनपुर">हसनपुर</option>';
        }
        else if(district.value=="मेरठ"){
            document.getElementById('nirvachan').innerHTML=' <option value="सिवाल खास">सिवाल खास</option>'+
            '<option value="सरधाना">सरधाना</option>'+
            '<option value="हस्तिनापुर">हस्तिनापुर</option>'+
            '<option value="किठौर">किठौर</option>'+
            '<option value="मेरठ कैंट">मेरठ कैंट</option>'+
            '<option value="मेरठ">मेरठ</option>'+
            '<option value="मेरठ दक्षिण">मेरठ दक्षिण</option>';
        }
        else if(district.value=="बागपत"){
            document.getElementById('nirvachan').innerHTML=' <option value="छपरौली">छपरौली</option>';
        }
        else if(district.value=="फैजाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option value="बड़ौत">बड़ौत</option>';
        }
        else if(district.value=="गाज़ियाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option value="लौनी">लौनी</option>'+
            '<option value="मुरादनगर">मुरादनगर</option>'+
            '<option value="साहिबाबाद">साहिबाबाद</option>'+
            '<option value="गाज़ियाबाद">गाज़ियाबाद</option>'+
            '<option value="मोदीनगर">मोदीनगर</option>';
        }
        else if(district.value=="हापुड़"){
            document.getElementById('nirvachan').innerHTML=' <option value="धौलाना">धौलाना</option>'+
            '<option value="हापुड़">हापुड़</option>'+
            '<option value="गढ़मुक्तेश्वर">गढ़मुक्तेश्वर</option>';
        }
        else if(district.value=="गौतमबुद्ध नगर"){
            document.getElementById('nirvachan').innerHTML=' <option value="नोएडा">नोएडा</option>'+
            '<option value="दादरी">दादरी</option>'+
            '<option value="ज़ेवर">ज़ेवर</option>';
        }
        else if(district.value=="बुलंदशहर"){
            document.getElementById('nirvachan').innerHTML=' <option value="सिकंदराबाद">सिकंदराबाद</option>'+
            '<option value="बुलंदशहर">बुलंदशहर</option>'+
            '<option value="स्याना">स्याना</option>'+
            '<option value="अनूप शहर">अनूप शहर</option>'+
            '<option value="दीबाई">दीबाई</option>'+
            '<option value="शिकारपुर">शिकारपुर</option>'+
            '<option value="खुर्जा">खुर्जा</option>';
        }
        else if(district.value=="अलीगढ़"){
            document.getElementById('nirvachan').innerHTML=' <option value="खैर">खैर</option>'+
            '<option value="बरौली">बरौली</option>'+
            '<option value="अतरौली">अतरौली</option>'+
            '<option value="छपरा">छपरा</option>'+
            '<option value="कोइल">कोइल</option>'+
            '<option value="अलीगढ़">अलीगढ़</option>'+
            '<option value="इग्लास">इग्लास</option>';
        }
        else if(district.value=="हाथरस"){
            document.getElementById('nirvachan').innerHTML=' <option value="हाथरस">हाथरस</option>'+
            '<option value="सादाबाद">सादाबाद</option>'+
            '<option value="सिकंदरा-राव">सिकंदरा-राव</option>';
        }
        else if(district.value=="मथुरा"){
            document.getElementById('nirvachan').innerHTML=' <option value="छाता">छाता</option>'+
            '<option value="मांट">मांट</option>'+
            '<option value="गोवर्धन">गोवर्धन</option>'+
            '<option value="मथुरा">मथुरा</option>'+
            '<option value="बलदेव">बलदेव</option>';
        }
        else if(district.value=="आगरा"){
            document.getElementById('nirvachan').innerHTML=' <option value="एतमादपुर">एतमादपुर</option>'+
            '<option value="आगरा कैंट">आगरा कैंट</option>'+
            '<option value="आगरा दक्षिण">आगरा दक्षिण</option>'+
            '<option value="आगरा उत्तर">आगरा उत्तर</option>'+
            '<option value="आगरा ग्रामीण">आगरा ग्रामीण</option>'+
            '<option value="फतेहपुर सीकरी">फतेहपुर सीकरी</option>'+
            '<option value="खेरागढ़">खेरागढ़</option>'+
            '<option value="फतेहाबाद">फतेहाबाद</option>'+
            '<option value="बाह">बाह</option>';
        }
        else if(district.value=="फिरोजाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option value="टुंडला">टुंडला</option>'+
            '<option value="जसराना">जसराना</option>'+
            '<option value="फिरोजाबाद">फिरोजाबाद</option>'+
            '<option value="शिकोहाबाद">शिकोहाबाद</option>'+
            '<option value="सिरसागंज">सिरसागंज</option>';
        }
        else if(district.value=="कासगंज"){
            document.getElementById('nirvachan').innerHTML=' <option value="कासगंज">कासगंज</option>'+
            '<option value="अमापुर">अमापुर</option>'+
            '<option value="पटियाली">पटियाली</option>';
        }
        else if(district.value=="एटा"){
            document.getElementById('nirvachan').innerHTML=' <option value="अलीगंज">अलीगंज</option>'+
            '<option value="एटा">एटा</option>'+
            '<option value="मरहारा">मरहारा</option>'+
            '<option value="जलेसर">जलेसर</option>';
        }
        else if(district.value=="मैनपुरी"){
            document.getElementById('nirvachan').innerHTML=' <option value="मैनपुरी">मैनपुरी</option>'+
            '<option value="भोगाँव">भोगाँव</option>'+
            '<option value="किशनी">किशनी</option>'+
            '<option value="करहल">करहल</option>';
        }
        else if(district.value=="बदायूं"){
            document.getElementById('nirvachan').innerHTML=' <option value="गुन्नौर">गुन्नौर</option>'+
            '<option value="बिसौली">बिसौली</option>'+
            '<option value="सहसवान">सहसवान</option>'+
            '<option value="बिल्सी">बिल्सी</option>'+
            '<option value="बदायूं">बदायूं</option>'+
            '<option value="शेखूपुर">शेखूपुर</option>'+
            '<option value="दातागंज">दातागंज</option>';
        }
        else if(district.value=="बरेली"){
            document.getElementById('nirvachan').innerHTML=' <option value="बहेरी">बहेरी</option>'+
            '<option value="मीरगंज">मीरगंज</option>'+
            '<option value="भोजीपुरा">भोजीपुरा</option>'+
            '<option value="नवाबगंज">नवाबगंज</option>'+
            '<option value="फरीदपुर">फरीदपुर</option>'+
            '<option value="बरेली">बरेली</option>'+
            '<option value="बरेली कैंट">बरेली कैंट</option>'+
            '<option value="आँवला">आँवला</option>';
        }
        else if(district.value=="पीलीभीत"){
            document.getElementById('nirvachan').innerHTML=' <option value="पीलीभीत">पीलीभीत</option>'+
            '<option value="बरखेड़ा">बरखेड़ा</option>'+
            '<option value="पूरनपुर">पूरनपुर</option>'+
            '<option value="बीसलपुर">बीसलपुर</option>';
        }
        else if(district.value=="शाहजहांपुर"){
            document.getElementById('nirvachan').innerHTML=' <option value="कटरा">कटरा</option>'+
            '<option value="जलालाबाद">जलालाबाद</option>'+
            '<option value="तिलहर">तिलहर</option>'+
            '<option value="पोवाया">पोवाया</option>'+
            '<option value="ददरौल">ददरौल</option>';
        }
        else if(district.value=="लखीमपुर खीरी"){
            document.getElementById('nirvachan').innerHTML=' <option value="पलिया">पलिया</option>'+
            '<option value="निधासन">निधासन</option>'+
            '<option value="गोला गोकर्णनाथ">गोला गोकर्णनाथ</option>'+
            '<option value="श्रीनगर">श्रीनगर</option>'+
            '<option value="धौरहरा">धौरहरा</option>'+
            '<option value="लखीमपुर">लखीमपुर</option>'+
            '<option value="कस्ता">कस्ता</option>'+
            '<option value="मोहम्मदी">मोहम्मदी</option>';
        }
        else if(district.value=="सीतापुर"){
            document.getElementById('nirvachan').innerHTML=' <option value="महोली">महोली</option>'+
            '<option value="सीतापुर">सीतापुर</option>'+
            '<option value="हरगाओ">हरगाओ</option>'+
            '<option value="लहरपुर">लहरपुर</option>'+
            '<option value="विस्नवा">विस्नवा</option>'+
            '<option value="सेवाता">सेवाता</option>'+
            '<option value="महमूदाबाद">महमूदाबाद</option>'+
            '<option value="सिधौली">सिधौली</option>'+
            '<option value="मिश्रीख">मिश्रीख</option>';
        }
        else if(district.value=="हरदोई"){
            document.getElementById('nirvachan').innerHTML=' <option value="सवैजपुर">सवैजपुर</option>'+
            '<option value="शाहाबाद">शाहाबाद</option>'+
            '<option value="हरदोई">हरदोई</option>'+
            '<option value="गोपामऊ">गोपामऊ</option>'+
            '<option value="साण्डी">साण्डी</option>'+
            '<option value="बिलग्राम मल्लनवा">बिलग्राम मल्लनवा</option>'+
            '<option value="बालामाऊ">बालामाऊ</option>'+
            '<option value="संडीला">संडीला</option>';
        }
        else if(district.value=="उन्नाव"){
            document.getElementById('nirvachan').innerHTML=' <option value="बांगरमऊ">बांगरमऊ</option>'+
            '<option value="सफ़ीपुर">सफ़ीपुर</option>'+
            '<option value="मोहन">मोहन</option>'+
            '<option value="उन्नाव">उन्नाव</option>'+
            '<option value="भगवंत नगर">भगवंत नगर</option>'+
            '<option value="पूर्वा">पूर्वा</option>';
        }
        else if(district.value=="लखनऊ"){
            document.getElementById('nirvachan').innerHTML=' <option value="मलीहाबाद">मलीहाबाद</option>'+
            '<option value="बख्शी का तालाब">बख्शी का तालाब</option>'+
            '<option value="सरोजिनी नगर">सरोजिनी नगर</option>'+
            '<option value="लखनऊ पश्चिम">लखनऊ पश्चिम</option>'+
            '<option value="लखनऊ उत्तर">लखनऊ उत्तर</option>'+
            '<option value="लखनऊ पूर्व">लखनऊ पूर्व</option>'+
            '<option value="लखनऊ सेंट्रल">लखनऊ सेंट्रल</option>'+
            '<option value="लखनऊ कैंट">लखनऊ कैंट</option>'+
            '<option value="मोहनलाल गंज">मोहनलाल गंज</option>';
        }
        else if(district.value=="राय बरेली"){
            document.getElementById('nirvachan').innerHTML=' <option value="बछरावा">बछरावा</option>'+
            '<option value="हरचंदपुर">हरचंदपुर</option>'+
            '<option value="राय बरेली">राय बरेली</option>'+
            '<option value="सारेनी">सारेनी</option>'+
            '<option value="ऊंचाहार">ऊंचाहार</option>'+
            '<option value="सलोन">सलोन</option>';
        }
        else if(district.value=="अमेठी"){
            document.getElementById('nirvachan').innerHTML=' <option value="तिलोई">तिलोई</option>'+
            '<option value="जगदीशपुर">जगदीशपुर</option>'+
            '<option value="गोरीगंज">गोरीगंज</option>'+
            '<option value="अमेठी">अमेठी</option>';
        }
        else if(district.value=="सुल्तानपुर"){
            document.getElementById('nirvachan').innerHTML=' <option value="इसौली">इसौली</option>'+
            '<option value="सुल्तानपुर">सुल्तानपुर</option>'+
            '<option value="सदर">सदर</option>'+
            '<option value="लम्भुआ">लम्भुआ</option>'+
            '<option value="कादीपुर">कादीपुर</option>';
        }
        else if(district.value=="फर्रुखाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option value="कायमगंज">कायमगंज</option>'+
            '<option value="अमृतपुर">अमृतपुर</option>'+
            '<option value="फर्रुखाबाद">फर्रुखाबाद</option>'+
            '<option value="भोजपुर">भोजपुर</option>';
        }
        else if(district.value=="कन्नौज"){
            document.getElementById('nirvachan').innerHTML=' <option value="छिबरामऊ">छिबरामऊ</option>'+
            '<option value="तिरवा">तिरवा</option>'+
            '<option value="कन्नौज">कन्नौज</option>';
        }
        else if(district.value=="इटावा"){
            document.getElementById('nirvachan').innerHTML=' <option value="जसवंतपुर">जसवंतपुर</option>'+
            '<option value="इटावा">इटावा</option>'+
            '<option value="भरथना">भरथना</option>';
        }
        else if(district.value=="औरैया"){
            document.getElementById('nirvachan').innerHTML=' <option value="विधुना">विधुना</option>'+
            '<option value="दिबियापुर">दिबियापुर</option>'+
            '<option value="औरैया">औरैया</option>';
        }
        else if(district.value=="कानपुर देहात"){   
            document.getElementById('nirvachan').innerHTML=' <option value="रसूलाबाद"> रसूलाबाद</option>'+
            '<option value="अकबरपुरनिया">अकबरपुरनिया</option>'+
            '<option value="सिकंदरा">सिकंदरा</option>'+
            '<option value="भोगनीपुर">भोगनीपुर</option>';
        }
        else if(district.value=="कानपुर ग्रामीण"){   
            document.getElementById('nirvachan').innerHTML=' <option value="बिल्होर"> बिल्होर</option>'+
            '<option value="बिथपुर">बिथपुर</option>'+
            '<option value="कल्याणपुर">कल्याणपुर</option>';
        }
        else if(district.value=="कानपुर नगर"){  
            document.getElementById('nirvachan').innerHTML=' <option value="गोविंद नगर">  गोविंद नगर</option>'+
            '<option value="सीसामाऊ">सीसामाऊ</option>'+
            '<option value="आर्य नगर">आर्य नगर</option>'+
            '<option value="किदवई नगर">किदवई नगर</option>'+
            '<option value="कानपुर कैंट">कानपुर कैंट</option>'+
            '<option value="महाराजपुर">महाराजपुर </option>';
        }
        else if(district.value=="जालौन"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="माधोगढ">माधोगढ</option>'+
            '<option value="कलपी">कलपी</option>'+
            '<option value="उरई">उरई </option>';
        }
        else if(district.value=="झाँसी"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="बबीना"> बबीना</option>'+
            '<option value="झांसी नगर"> झांसी नगर</option>'+
            '<option value="मऊरानीपुर"> मऊरानीपुर</option>'+
            '<option value="गरौठा">गरौठा</option>';
        }
        else if(district.value=="ललितपुर"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="बबीना"> बबीना</option>'+
            '<option value="महरोनी">महरोनी</option>';
        }
        else if(district.value=="हमीरपुर"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="हमीरपुर"> हमीरपुर</option>'+
            '<option value="राठ">राठ</option>';
        }
        else if(district.value=="महोबा"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="महोबा"> महोबा</option>'+
            '<option value="चरखारी">चरखारी</option>';
        }
        else if(district.value=="बाँदा"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="तिन्दवारी">तिन्दवारी</option>'+
            '<option value="बबेरू">बबेरू</option>'+
            '<option value="नारायणी">नारायणी</option>'+
            '<option value="बाँदा">बाँदा</option>';
        }
        else if(district.value=="चित्रकूट"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="चित्रकूट">चित्रकूट</option>'+
            '<option value="मनिकपुर">मनिकपुर</option>';
        }
        else if(district.value=="फतेहपुर"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="जहानाबाद">  जहानाबाद</option>'+
            '<option value="बिंदकी">बिंदकी</option>'+
            '<option value="फतेहपुर">फतेहपुर</option>'+
            '<option value="आया शाह">आया शाह</option>'+
            '<option value="हुसैनगंज">हुसैनगंज</option>'+
            '<option value="खागा">खागा</option>';
        }
        else if(district.value=="प्रतापगढ"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="रामपुर खास"> रामपुर खास</option>'+
            '<option value="बाबागंज">बाबागंज</option>'+
            '<option value="कुंडा">कुंडा</option>'+
            '<option value="विश्वनाथ गंज">विश्वनाथ गंज</option>'+
            '<option value="प्रतापगढ">प्रतापगढ</option>'+
            '<option value="पटी">पटी</option>'+
            '<option value="रानीगंज">रानीगंज</option>';
        }
        else if(district.value=="कौशाम्बी"){ 
            document.getElementById('nirvachan').innerHTML=' <option value="सिराथू">सिराथू</option>'+
            '<option value="मंजनपुर">मंजनपुर</option>'+
            '<option value="चायल">चायल</option>';
        }
        else if(district.value=="इलाहाबाद"){
            document.getElementById('nirvachan').innerHTML=' <option value="फाफामाऊ">फाफामाऊ</option>'+
            '<option value="सौरंवी">सौरंवी</option>'+
            '<option value="फूलपुर">फूलपुर</option>'+
            '<option value="प्रताप पुरी">प्रताप पुरी</option>'+
            '<option value="हंडिया">हंडिया</option>'+
            '<option value="मेजा">मेजा</option>'+
            '<option value="करछना">करछना</option>'+
            '<option value="इलाहाबाद पश्चिम">इलाहाबाद पश्चिम</option>'+
            '<option value="इलाहाबाद उत्तर">इलाहाबाद उत्तर</option>'+
            '<option value="इलाहाबाद दक्षिण">इलाहाबाद दक्षिण</option>'+
            '<option value="बारा">बारा</option>'+
            '<option value="कोरांव">कोरांव</option>';
        }
        else if(district.value=="बाराबंकी"){
            document.getElementById('nirvachan').innerHTML=' <option value=" कुरसी"> कुरसी</option>'+
            '<option value="रामनगर">रामनगर</option>'+
            '<option value="बाराबंकी">बाराबंकी</option>'+
            '<option value="जैदपुर">जैदपुर</option>'+
            '<option value="हैदरगढ">हैदरगढ</option>'+
            '<option value="दरियाबाद">दरियाबाद</option>';
        }
        else if(district.value=="अम्बेडकर नगर"){
            document.getElementById('nirvachan').innerHTML=' <option value="कटेहरी"> कटेहरी</option>'+
            '<option value="टांडा">टांडा</option>'+
            '<option value="अलापुर">अलापुर</option>'+
            '<option value="जलालपुर">जलालपुर</option>'+
            '<option value="अकबरपुर">अकबरपुर</option>';
        }
        else if(district.value=="बहराइच"){
            document.getElementById('nirvachan').innerHTML=' <option value="बलहा"> बलहा</option>'+
            '<option value="नानपारा">नानपारा</option>'+
            '<option value="मटेरा">मटेरा</option>'+
            '<option value="महसी">महसी</option>'+
            '<option value="बहराइच">बहराइच</option>'+
            '<option value="प्रयागपुर">प्रयागपुर</option>'+
            '<option value="कैसरगंज">कैसरगंज</option>';
        }
        else if(district.value=="श्रावस्ती"){
            document.getElementById('nirvachan').innerHTML=' <option value="श्रावस्ती"> श्रावस्ती</option>'+
            '<option value="भिंगा">भिंगा</option>';
        }
        else if(district.value=="बलरामपुर"){
            document.getElementById('nirvachan').innerHTML=' <option value="मऊ"> मऊ</option>'+
            '<option value="गौसरी">गौसरी</option>'+
            '<option value="उतरौला">उतरौला</option>'+
            '<option value="बलरामपुर">बलरामपुर</option>';
        }
        else if(district.value=="गोंडा"){
            document.getElementById('nirvachan').innerHTML=' <option value="महनाओ">  महनाओ</option>'+
            '<option value="गोंडा">गोंडा</option>'+
            '<option value="कटरा बाजार">कटरा बाजार</option>'+
            '<option value="करनालगंज">करनालगंज</option>'+
            '<option value="तरबगंज">तरबगंज</option>'+
            '<option value="मनकापुर">मनकापुर</option>'+
            '<option value="गौरा">गौरा</option>';
        }
        else if(district.value=="सिद्धार्थनगर"){
            document.getElementById('nirvachan').innerHTML=' <option value="शोहरथगढ"> शोहरथगढ</option>'+
            '<option value="कपिलवसतु">कपिलवसतु</option>'+
            '<option value="बंसी">बंसी</option>'+
            '<option value="इतवा">इतवा</option>'+
            '<option value="डुमरियागंज">डुमरियागंज</option>';
        }
        else if(district.value=="बस्ती"){
            document.getElementById('nirvachan').innerHTML=' <option value="हरैया">हरैया</option>'+
            '<option value="कप्तानगंज">कप्तानगंज</option>'+
            '<option value="रुधौली">रुधौली</option>'+
            '<option value="बस्ती सदरी">बस्ती सदरी</option>'+
            '<option value="महादेवा">महादेवा</option>';
        }
        else if(district.value=="संत कबीरनगर"){
            document.getElementById('nirvachan').innerHTML=' <option value="मेंधावल">मेंधावल</option>'+
            '<option value="खलीलाबाद">खलीलाबाद</option>'+
            '<option value="घंघाटा">घंघाटा</option>';
        }
        else if(district.value=="महाराजगंज"){
            document.getElementById('nirvachan').innerHTML=' <option value="फरेंदा">फरेंदा</option>'+
            '<option value="नौटेनवा">नौटेनवा</option>'+
            '<option value="सिसवान">सिसवान</option>'+
            '<option value="महाराजगंज">महाराजगंज</option>'+
            '<option value="पनियारा">पनियारा</option>';
        }
        else if(district.value=="गोरखपुर"){
            document.getElementById('nirvachan').innerHTML=' <option value="खजानी">खजानी</option>'+
            '<option value="कैम्पियरगंज">कैम्पियरगंज</option>'+
            '<option value="पिपराइच">पिपराइच</option>'+
            '<option value="गोरखपुर शहर">गोरखपुर शहर</option>'+
            '<option value="गोरखपुर ग्रामीण">गोरखपुर ग्रामीण</option>'+
            '<option value="सहजनवा">सहजनवा</option>'+
            '<option value="चौरा चौरी">चौरा चौरी</option>'+
            '<option value="बांसगांव">बांसगांव</option>'+
            '<option value="चिल्लूपर">चिल्लूपर</option>';
        }
        else if(district.value=="कुशीनगर"){
            document.getElementById('nirvachan').innerHTML=' <option value="खडडा">खडडा</option>'+
            '<option value="पडरौना">पडरौना</option>'+
            '<option value="तमकुहीराज">तमकुहीराज</option>'+
            '<option value="फाज़िल नगर">फाज़िल नगर</option>'+
            '<option value="कुशीनगर">कुशीनगर</option>'+
            '<option value="हटा">हटा</option>'+
            '<option value="रामकोला">रामकोला</option>';
        }
        else if(district.value=="देवरिया"){
            document.getElementById('nirvachan').innerHTML=' <option value="रुद्रपुर">रुद्रपुर</option>'+
            '<option value="देवरिया">देवरिया</option>'+
            '<option value="पथरादेवा">पथरादेवा</option>'+
            '<option value="रामपुर कारखाना">रामपुर कारखाना</option>'+
            '<option value="भाटपर रानी">भाटपर रानी</option>'+
            '<option value="सलेमपुर">सलेमपुर</option>'+
            '<option value="बरहाज">बरहाज</option>';
        }
        else if(district.value=="आजमगढ़"){
            document.getElementById('nirvachan').innerHTML=' <option value="अतरौलिया"> अतरौलिया</option>'+
            '<option value="गोपालपुर">गोपालपुर</option>'+
            '<option value="सागदी">सागदी</option>'+
            '<option value="मुबारकपुर">मुबारकपुर</option>'+
            '<option value="आजमगढ">आजमगढ</option>'+
            '<option value="निजामाबाद">निजामाबाद</option>'+
            '<option value="फूलपुरपवई">फूलपुरपवई</option>'+
            '<option value="दीदारगंज">दीदारगंज</option>'+
            '<option value="लालगंज">लालगंज</option>'+
            '<option value="मेह नगर">मेह नगर</option>';
        }
        else if(district.value=="मऊ"){
            document.getElementById('nirvachan').innerHTML=' <option value="मधुबन">  मधुबन</option>'+
            '<option value="घोषी">घोषी</option>'+
            '<option value="मोहम्मदाबाद गोहाना">मोहम्मदाबाद गोहाना</option>'+
            '<option value="मऊ">मऊ</option>';
        }
        else if(district.value=="बलिया"){
            document.getElementById('nirvachan').innerHTML=' <option value="बेल्थारारोड">बेल्थारारोड</option>'+
            '<option value="रसदा">रसदा</option>'+
            '<option value="सिकंदरपुर">सिकंदरपुर</option>'+
            '<option value="फैफ़ना">फैफ़ना</option>'+
            '<option value="बलियानगर">बलियानगर</option>'+
            '<option value="बांसडीह">बांसडीह</option>'+
            '<option value="बैरिया">बैरिया</option>';
        }
        else if(district.value=="जौनपुर"){
            document.getElementById('nirvachan').innerHTML=' <option value="बदलापुर">बदलापुर</option>'+
            '<option value="शाहगंज">शाहगंज</option>'+
            '<option value="जौनपुर">जौनपुर</option>'+
            '<option value="मल्हानी">मल्हानी</option>'+
            '<option value="मुंगरबादशाहपुर">मुंगरबादशाहपुर</option>'+
            '<option value="मछलीशहर">मछलीशहर</option>'+
            '<option value="मारियाहु">मारियाहु</option>'+
            '<option value="जाफराबाद">जाफराबाद</option>'+
            '<option value="केराकाट">केराकाट</option>';
        }
        else if(district.value=="ग़ाज़ीपुर"){
            document.getElementById('nirvachan').innerHTML=' <option value="जखनिया">जखनिया</option>'+
            '<option value="गाज़ीपुर">गाज़ीपुर</option>'+
            '<option value="जंगीपुर">जंगीपुर</option>'+
            '<option value="मल्हानी">मल्हानी</option>'+
            '<option value="जहराबाद">जहराबाद</option>'+
            '<option value="मोहम्मदाबाद">मोहम्मदाबाद</option>'+
            '<option value="जमानिया">जमानिया</option>';
        }
        else if(district.value=="चंदौली"){
            document.getElementById('nirvachan').innerHTML=' <option value="सकलडीहा">सकलडीहा</option>'+
            '<option value="मुगलसराय">मुगलसराय</option>'+
            '<option value="सैयादराजा">सैयादराजा</option>'+
            '<option value="चकिया">चकिया</option>';
        }
        else if(district.value=="वाराणसी"){
            document.getElementById('nirvachan').innerHTML=' <option value="पिंड">पिंड</option>'+
            '<option value="अजगरा">अजगरा</option>'+
            '<option value="शिवपुर">शिवपुर</option>'+
            '<option value="रोहनिया">रोहनिया</option>'+
            '<option value="वाराणसी उत्तर">वाराणसी उत्तर</option>'+
            '<option value="वाराणसी दक्षिण">वाराणसी दक्षिण</option>'+
            '<option value="वाराणसी कैंट">वाराणसी कैंट</option>'+
            '<option value="सेवापुरी">सेवापुरी</option>';
        }
        else if(district.value=="भदोही"){
            document.getElementById('nirvachan').innerHTML=' <option value="भदोही">भदोही</option>'+
            '<option value="ज्ञानपुर">ज्ञानपुर</option>'+
            '<option value="उरई">उरई</option>';
        }
        else if(district.value=="मिर्ज़ापुर"){
            document.getElementById('nirvachan').innerHTML=' <option value="छानबे">छानबे</option>'+
            '<option value="मिर्ज़ापुर">मिर्ज़ापुर</option>'+
            '<option value="मांझावा">मांझावा</option>'+
            '<option value="चुनार">चुनार</option>'+
            '<option value="मदिहान">मदिहान</option>';
        }
        else if(district.value=="सोनभद्र"){
            document.getElementById('nirvachan').innerHTML=' <option value="घोरावल">घोरावल</option>'+
            '<option value="रोबेर्त्स्गंज">रोबेर्त्स्गंज</option>'+
            '<option value="ओबेरा">ओबेरा</option>'+
            '<option value="दुधि">दुधि</option>';
        }
        else{
            document.getElementById('nirvachan').innerHTML="";
        }
       })
  </script>
    
</body>
</html>