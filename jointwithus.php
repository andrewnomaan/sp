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
       })
      
  </script>
    
</body>
</html>