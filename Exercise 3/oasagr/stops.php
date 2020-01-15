<?php 
//HEADER
include('./components/header/header.php');
?>

<?php
// BREADCRUMB
$breadcrumb = array('Oasa.gr','Χάρτης', 'Στάσεις');
$breadlinks = array('index.php','#','stops.php');
include('components\breadcrumbs\breadcrumb.php');
?>
<form method="POST">
<input name="text"></input>
<button type="submit">Αναζήτηση</button>
</form>
<?php


if($_POST['text']==''){
echo('
<table cellspacing="0" cellpadding="0" style="background-color:whitesmoke;">
    <colgroup><col width="58">
    <col width="111">
    <col width="225" span="3">
    </colgroup><tbody><tr height="21">
      <td colspan="5" width="844" height="21">ΠΡΟΕΞΟΧΕΣ ΠΕΖΟΔΡΟΜΙΩΝ ΟΑΣΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">#</td>
      <td width="111">ΚΩΔΙΚΟΣ&nbsp;</td>
      <td width="225">ΟΝΟΜ.ΣΤΑΣΗΣ</td>
      <td width="225">ΟΔΟΣ</td>
      <td width="225">ΔΗΜΟΣ&nbsp;</td>
    </tr>'.
    
    SELECT column1, column2,FROM table_name WHERE columnN LIKE pattern; 

   .' </tbody></table>
    ');
}
if($_POST['text']=='ΑΜΕΑ'||$_POST['text']=='αμεα'){
echo('
<table cellspacing="0" cellpadding="0" style="background-color:whitesmoke;">
    <colgroup><col width="58">
    <col width="111">
    <col width="225" span="3">
    </colgroup><tbody><tr height="21">
      <td colspan="5" width="844" height="21">ΠΡΟΕΞΟΧΕΣ ΠΕΖΟΔΡΟΜΙΩΝ ΟΑΣΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">#</td>
      <td width="111">ΚΩΔΙΚΟΣ&nbsp;</td>
      <td width="225">ΟΝΟΜ.ΣΤΑΣΗΣ</td>
      <td width="225">ΟΔΟΣ</td>
      <td width="225">ΔΗΜΟΣ&nbsp;</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">1</td>
      <td width="111">010058</td>
      <td width="225">ΑΣΤΥΝΟΜΙΑ</td>
      <td width="225">ΣΤΕΦ.ΣΑΡΑΦΗ</td>
      <td width="225">AΓ.    ΒΑΡΒΑΡΑΣ&nbsp;</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">2</td>
      <td width="111">010062</td>
      <td width="225">ΛΥΚΟΥΡΓΟΥ</td>
      <td width="225">ΛΥΚΟΥΡΓΟΥ</td>
      <td width="225">AΓ.    ΒΑΡΒΑΡΑΣ&nbsp;</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">3</td>
      <td width="111">010054</td>
      <td width="225">ΣΤΕΦ.ΣΑΡΑΦΗ</td>
      <td width="225">ΣΤΕΦ.ΣΑΡΑΦΗ</td>
      <td width="225">AΓ.    ΒΑΡΒΑΡΑΣ&nbsp;</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">4</td>
      <td width="111">040078</td>
      <td width="225">3η    ΑΣΥΡΜΑΤΟΥ</td>
      <td width="225">ΑΣΥΡΜΑΤΟΥ</td>
      <td width="225">ΑΓ.    ΔΗΜΗΤΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">5</td>
      <td width="111">040067</td>
      <td width="225">ΝΕΚΡ.ΚΑΛΛΙΘΕΑΣ</td>
      <td width="225">ΑΓ.ΘΕΟΔΩΡΩΝ</td>
      <td width="225">ΑΓ.    ΔΗΜΗΤΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">6</td>
      <td width="111">040019</td>
      <td width="225">ΣΧΟΛΕΙΟ</td>
      <td width="225">ΛΕΩΦ.ΑΓ.ΔΗΜΗΤΡΙΟΥ</td>
      <td width="225">ΑΓ.    ΔΗΜΗΤΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">7</td>
      <td width="111">060038</td>
      <td width="225">1η    ΒΑΛΤΙΝΩΝ</td>
      <td width="225">ΒΑΛΤΙΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">8</td>
      <td width="111">060639</td>
      <td width="225">1η    ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΩΝ.ΤΣΑΛΔΑΡΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">9</td>
      <td width="111">061151</td>
      <td width="225">1η    ΡΙΖΑΡΗ</td>
      <td width="225">ΡΙΖΑΡΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">10</td>
      <td width="111">060039</td>
      <td width="225">2η    ΒΑΛΤΙΝΩΝ</td>
      <td width="225">ΒΑΛΤΙΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">11</td>
      <td width="111">060758</td>
      <td width="225">2η    ΡΙΖΑΡΗ</td>
      <td width="225">ΡΙΖΑΡΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">12</td>
      <td width="111">061026</td>
      <td width="225">2η    ΣΧΟΛΕΙΟ</td>
      <td width="225">ΕΥΦΡΟΝΙΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">13</td>
      <td width="111">230025</td>
      <td width="225">2η    ΣΧΟΛΕΙΟ</td>
      <td width="225">ΕΥΦΡΟΝΙΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">14</td>
      <td width="111">061088</td>
      <td width="225">KOYKAKI</td>
      <td width="225">ΔΗΜΗΤΡΑΚΟΠΟΥΛΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">15</td>
      <td width="111">061122</td>
      <td width="225">ΑΓ.ΑΙΚΑΤΕΡΙΝΗ</td>
      <td width="225">ΗΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">16</td>
      <td width="111">060845</td>
      <td width="225">ΑΓ.ΑΡΤΕΜΙΟΣ</td>
      <td width="225">ΦΙΛΟΛΑΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">17</td>
      <td width="111">060050</td>
      <td width="225">ΑΓ.ΔΗΜΗΤΡΙΟΣ</td>
      <td width="225">ΠΑΝΟΡΜΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">18</td>
      <td width="111">060909</td>
      <td width="225">ΑΓ.ΕΛΕΥΘΕΡΙΟΣ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">19</td>
      <td width="111">060017</td>
      <td width="225">ΑΓ.ΕΛΕΥΘΕΡΙΟΣ</td>
      <td width="225">ΜΟΜΦΕΡΑΤΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">20</td>
      <td width="111">060055</td>
      <td width="225">ΑΓ.ΕΛΕΥΘΕΡΙΟΣ</td>
      <td width="225">ΡΑΓΚΑΒΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">21</td>
      <td width="111">060480</td>
      <td width="225">ΑΓ.ΛΟΥΚΑΣ</td>
      <td width="225">ΔΡΟΣΟΠΟΥΛΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">22</td>
      <td width="111">061061</td>
      <td width="225">ΑΓ.ΛΟΥΚΑΣ</td>
      <td width="225">ΠΑΤΗΣΙΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">23</td>
      <td width="111">060339</td>
      <td width="225">ΑΓ.ΜΑΡΚΕΛΑ</td>
      <td width="225">ΣΠΥΡΟΥ    ΠΑΤΣΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">24</td>
      <td width="111">060165</td>
      <td width="225">ΑΓ.ΜΕΛΕΤΙΟΣ</td>
      <td width="225">ΒΟΡ.ΗΠΕΙΡΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">25</td>
      <td width="111">060897</td>
      <td width="225">ΑΓ.ΜΕΛΕΤΙΟΥ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">26</td>
      <td width="111">060917</td>
      <td width="225">ΑΓ.ΜΕΛΕΤΙΟΥ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">27</td>
      <td width="111">060900</td>
      <td width="225">ΑΓ.ΝΙΚΟΛΑΟΣ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">28</td>
      <td width="111">060914</td>
      <td width="225">ΑΓ.ΝΙΚΟΛΑΟΣ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">29</td>
      <td width="111">230035</td>
      <td width="225">ΑΓ.ΝΙΚΟΛΑΟΣ</td>
      <td width="225">ΥΜΗΤΤΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">30</td>
      <td width="111">060895</td>
      <td width="225">ΑΓ.ΠΑΝΤΕΛΕΗΜΩΝ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">31</td>
      <td width="111">061163</td>
      <td width="225">ΑΓ.ΣΠΥΡΙΔΩΝ</td>
      <td width="225">ΕΡΑΤΟΣΘΕΝΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">32</td>
      <td width="111">060887</td>
      <td width="225">ΑΓ.ΧΑΡΑΛΑΜΠΟΣ</td>
      <td width="225">ΒΑΛΤΙΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">33</td>
      <td width="111">060428</td>
      <td width="225">ΑΓΓΕΛΟΠΟΥΛΟΥ</td>
      <td width="225">3ηs    ΣΕΠΤΕΜΒΡΙΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">34</td>
      <td width="111">060711</td>
      <td width="225">ΑΛΕΞ</td>
      <td width="225">ΜΙΚΡΑΣ    ΑΣΙΑΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">35</td>
      <td width="111">200052</td>
      <td width="225">ΑΛΕΞ</td>
      <td width="225">ΠΑΠΑΔΙΑΜΑΝΤΟΠΟΥΛΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">36</td>
      <td width="111">060753</td>
      <td width="225">ΑΛΣΟΣ</td>
      <td width="225">ΣΠΥΡ.ΜΕΡΚΟΥΡΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">37</td>
      <td width="111">060752</td>
      <td width="225">ΑΛΣΟΣ</td>
      <td width="225">ΣΠΥΡ.ΜΕΡΚΟΥΡΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">38</td>
      <td width="111">060744</td>
      <td width="225">ΑΛΣΟΣ</td>
      <td width="225">ΕΥΤΥΧΙΔΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">39</td>
      <td width="111">060356</td>
      <td width="225">ΑΜΑΞΟΣΤΑΣΙΟ    ΒΟΤΑΝΙΚΟΥ</td>
      <td width="225">ΑΓ.ΠΟΛΥΚΑΡΠΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">40</td>
      <td width="111">061159</td>
      <td width="225">ΑΝΔΡΕΑΔΟΥ</td>
      <td width="225">ΒΙΚΕΛΑ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">41</td>
      <td width="111">061121</td>
      <td width="225">ΑΡΙΣΤΟΒΟΥΛΟΥ</td>
      <td width="225">ΗΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">42</td>
      <td width="111">060730</td>
      <td width="225">ΑΡΥΒΒΟΥ</td>
      <td width="225">ΑΡΥΒΒΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">43</td>
      <td width="111">061104</td>
      <td width="225">ΑΡΥΒΒΟΥ</td>
      <td width="225">ΦΙΛΟΛΑΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">44</td>
      <td width="111">060056</td>
      <td width="225">ΒΑΛΤΙΝΩΝ</td>
      <td width="225">ΒΑΛΤΙΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">45</td>
      <td width="111">060572</td>
      <td width="225">ΒΟΥΡΗ</td>
      <td width="225">ΕΥΣΤΑΘ.ΛΑΜΨΑ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">46</td>
      <td width="111">060756</td>
      <td width="225">ΒΡΥΣΑΚΗ</td>
      <td width="225">ΕΥΦΡΟΝΙΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">47</td>
      <td width="111">060755</td>
      <td width="225">ΒΡΥΣΑΚΙ</td>
      <td width="225">ΦΟΡΜΙΩΝΟΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">48</td>
      <td width="111">060677</td>
      <td width="225">ΓΑΛΑΞΙΑΣ</td>
      <td width="225">ΜΕΣΟΓΕΙΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">49</td>
      <td width="111">060455</td>
      <td width="225">ΓΑΛΑΤΣΙΟΥ</td>
      <td width="225">ΤΑΥΓΕΤΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">50</td>
      <td width="111">060040</td>
      <td width="225">ΓΕΝΝΑΔΙΟΥ</td>
      <td width="225">ΓΕΝΝΑΔΙΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">51</td>
      <td width="111">060732</td>
      <td width="225">ΓΕΦΥΡΑ</td>
      <td width="225">ΧΡΕΜΩΝΙΔΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">52</td>
      <td width="111">060541</td>
      <td width="225">ΓΥΜΝΑΣΙΟ</td>
      <td width="225">ΒΕΛΒΕΝΔΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">53</td>
      <td width="111">060754</td>
      <td width="225">ΓΥΜΝΑΣΙΟ</td>
      <td width="225">ΣΠΥΡ.ΜΕΡΚΟΥΡΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">54</td>
      <td width="111">060751</td>
      <td width="225">ΓΥΜΝΑΣΙΟ</td>
      <td width="225">ΣΠΥΡ.ΜΕΡΚΟΥΡΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">55</td>
      <td width="111">060625</td>
      <td width="225">ΔΙΚΑΣΤΗΡΙΑ</td>
      <td width="225">ΕΥΕΛΠΙΔΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">56</td>
      <td width="111">060103</td>
      <td width="225">ΔΟΡΥΛΑΙΟΥ</td>
      <td width="225">ΓΕΛΩΝΟΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">57</td>
      <td width="111">060888</td>
      <td width="225">ΕΜΠΕΔΟΚΛΕΟΥΣ</td>
      <td width="225">ΕΜΠΕΔΟΚΛΕΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">58</td>
      <td width="111">060735</td>
      <td width="225">ΕΜΠΕΔΟΚΛΕΟΥΣ</td>
      <td width="225">ΕΜΠΕΔΟΚΛΕΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">59</td>
      <td width="111">060886</td>
      <td width="225">ΕΥΕΛΠΙΔΩΝ</td>
      <td width="225">ΒΑΛΤΙΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">60</td>
      <td width="111">060757</td>
      <td width="225">ΕΥΦΡΟΝΙΟΥ</td>
      <td width="225">ΕΥΦΡΟΝΙΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">61</td>
      <td width="111">060545</td>
      <td width="225">ΖΑΚΥΝΘΟΥ</td>
      <td width="225">ΚΕΡΚΥΡΑΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">62</td>
      <td width="111">060139</td>
      <td width="225">ΖΑΧΑΡΟΠΛΑΣΤΕΙΟ</td>
      <td width="225">ΚΟΥΡΤΙΔΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">63</td>
      <td width="111">060137</td>
      <td width="225">ΖΑΧΑΡΟΠΛΑΣΤΕΙΟ</td>
      <td width="225">ΚΟΥΡΤΙΔΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">64</td>
      <td width="111">061076</td>
      <td width="225">ΖΙΝΝΗ</td>
      <td width="225">ΒΕΙΚΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">65</td>
      <td width="111">060893</td>
      <td width="225">ΗΠΕΙΡΟΥ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">66</td>
      <td width="111">061284</td>
      <td width="225">ΗΡΑΚΛΕΙΤΟΥ</td>
      <td width="225">ΣΚΟΥΦΑ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">67</td>
      <td width="111">060896</td>
      <td width="225">ΙΘΑΚΗΣ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">68</td>
      <td width="111">061345</td>
      <td width="225">ΙΚΑ</td>
      <td width="225">ΑΛΚΜΗΝΗΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">69</td>
      <td width="111">060176</td>
      <td width="225">ΙΚΑ    ΠΑΤΗΣΙΩΝ</td>
      <td width="225">ΔΡΟΣΟΠΟΥΛΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">70</td>
      <td width="111">060921</td>
      <td width="225">ΙΟΥΛΙΑΝΟΥ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">71</td>
      <td width="111">060742</td>
      <td width="225">ΙΦΙΚΡΑΤΟΥΣ</td>
      <td width="225">ΙΦΙΚΡΑΤΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">72</td>
      <td width="111">060431</td>
      <td width="225">ΚΑΛΛΙΦΡΟΝΑ</td>
      <td width="225">ΔΡΟΣΟΠΟΥΛΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">73</td>
      <td width="111">060762</td>
      <td width="225">ΚΑΡΑΒΕΛ</td>
      <td width="225">ΒΑΣ.ΑΛΕΞΑΝΔΡΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">74</td>
      <td width="111">061060</td>
      <td width="225">ΚΛΩΝΑΡΙΔΟΥ</td>
      <td width="225">ΠΑΤΗΣΙΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">75</td>
      <td width="111">060329</td>
      <td width="225">ΚΟΖΑΝΗΣ</td>
      <td width="225">ΚΟΖΑΝΗΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">76</td>
      <td width="111">060479</td>
      <td width="225">ΚΟΛΙΑΤΣΟΥ</td>
      <td width="225">ΔΡΟΣΟΠΟΥΛΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">77</td>
      <td width="111">061136</td>
      <td width="225">ΚΟΝΩΝΟΣ</td>
      <td width="225">ΥΜΗΤΤΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">78</td>
      <td width="111">061077</td>
      <td width="225">ΚΟΥΚΑΚΙ</td>
      <td width="225">ΒΕΙΚΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">79</td>
      <td width="111">060641</td>
      <td width="225">ΚΡΥΣΤΑΛ</td>
      <td width="225">ΠΡΙΓΚΙΠΟΝΝΗΣΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">80</td>
      <td width="111">060962</td>
      <td width="225">ΚΥΘΝΟΥ</td>
      <td width="225">ΚΥΘΝΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">81</td>
      <td width="111">060709</td>
      <td width="225">ΛΑΙΚΟ</td>
      <td width="225">ΜΙΚΡΑΣ    ΑΣΙΑΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">82</td>
      <td width="111">060478</td>
      <td width="225">ΛΥΣΙΑΤΡΕΙΟ</td>
      <td width="225">ΔΡΟΣΟΠΟΥΛΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">83</td>
      <td width="111">060878</td>
      <td width="225">ΛΥΣΣΙΑΤΡΕΙΟ</td>
      <td width="225">ΠΑΤΗΣΙΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">84</td>
      <td width="111">060729</td>
      <td width="225">ΜΕΛΙΣΣΟΥ</td>
      <td width="225">ΜΕΛΙΣΣΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">85</td>
      <td width="111">060018</td>
      <td width="225">ΜΟΜΦΕΡΑΤΟΥ</td>
      <td width="225">ΜΟΜΦΕΡΑΤΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">86</td>
      <td width="111">060041</td>
      <td width="225">ΜΠΟΥΚΟΥΒΑΛΑ</td>
      <td width="225">ΜΟΜΦΕΡΑΤΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">87</td>
      <td width="111">060978</td>
      <td width="225">ΜΠΟΥΚΟΥΒΑΛΑ</td>
      <td width="225">ΡΑΓΚΑΒΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">88</td>
      <td width="111">060088</td>
      <td width="225">ΝΑΥΤΙΚΟ</td>
      <td width="225">ΔΕΙΝΟΚΡΑΤΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">89</td>
      <td width="111">060104</td>
      <td width="225">ΝΑΥΤΙΚΟ</td>
      <td width="225">ΔΕΙΝΟΚΡΑΤΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">90</td>
      <td width="111">140026</td>
      <td width="225">ΝΕΟ    ΠΑΓΚΡΑΤΙ</td>
      <td width="225">ΝΙΚ.ΝΙΚΗΦΟΡΙΔΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">91</td>
      <td width="111">060705</td>
      <td width="225">ΝΟΣΟΚ.ΠΑΙΔΩΝ</td>
      <td width="225">ΘΗΒΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">92</td>
      <td width="111">060763</td>
      <td width="225">ΝΟΣΟΚ.ΣΥΓΓΡΟΥ</td>
      <td width="225">ΒΑΣ.ΑΛΕΞΑΝΔΡΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">93</td>
      <td width="111">060706</td>
      <td width="225">ΝΟΣΟΚΟΜΕΙΟ    ΠΑΙΔΩΝ</td>
      <td width="225">ΘΗΒΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">94</td>
      <td width="111">061098</td>
      <td width="225">ΠΑΓΚΡΑΤΙ</td>
      <td width="225">ΕΥΤΥΧΙΔΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">95</td>
      <td width="111">061127</td>
      <td width="225">ΠΑΙΔΙΚΗ    ΧΑΡΑ</td>
      <td width="225">ΔΗΜΗΤΡΑΚΟΠΟΥΛΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">96</td>
      <td width="111">060542</td>
      <td width="225">ΠΑΛ.ΤΕΡΜΑ</td>
      <td width="225">ΚΕΡΚΥΡΑΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">97</td>
      <td width="111">061183</td>
      <td width="225">ΠΑΛΑΙΟ    ΤΕΡΜΑ</td>
      <td width="225">ΠΡΙΓΚΙΠΟΝΝΗΣΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">98</td>
      <td width="111">060049</td>
      <td width="225">ΠΑΛΑΙΟ    ΤΕΡΜΑ</td>
      <td width="225">ΠΑΝΟΡΜΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">99</td>
      <td width="111">060046</td>
      <td width="225">ΠΑΛΑΙΟ    ΤΕΡΜΑ</td>
      <td width="225">ΠΑΝΟΡΜΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">100</td>
      <td width="111">060910</td>
      <td width="225">ΠΑΠΑΝΤΩΝΙΟΥ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">101</td>
      <td width="111">060915</td>
      <td width="225">ΠΑΡΑΔΕΙΣΟΣ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">102</td>
      <td width="111">060427</td>
      <td width="225">ΠΛ.ΒΙΚΤΩΡΙΑΣ</td>
      <td width="225">3ηs    ΣΕΠΤΕΜΒΡΙΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">103</td>
      <td width="111">060060</td>
      <td width="225">ΠΛ.ΕΞΑΡΧΕΙΩΝ</td>
      <td width="225">ΣΠΥΡ.ΤΡΙΚΟΥΠΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">104</td>
      <td width="111">061313</td>
      <td width="225">ΠΛ.ΠΑΓΚΡΑΤΙΟΥ</td>
      <td width="225">ΥΜΗΤΤΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">105</td>
      <td width="111">060738</td>
      <td width="225">ΠΛ.ΠΛΑΣΤΗΡΑ</td>
      <td width="225">ΕΥΤΥΧΙΔΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">106</td>
      <td width="111">060737</td>
      <td width="225">ΠΛ.ΠΛΑΣΤΗΡΑ</td>
      <td width="225">ΕΥΤΥΧΙΔΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">107</td>
      <td width="111">060727</td>
      <td width="225">ΠΛ.ΠΛΑΣΤΗΡΑ</td>
      <td width="225">ΑΡΧΙΜΗΔΟΥΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">108</td>
      <td width="111">060358</td>
      <td width="225">ΠΛΑΤΑΙΩΝ</td>
      <td width="225">ΜΕΓ.ΑΛΕΞΑΝΔΡΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">109</td>
      <td width="111">060449</td>
      <td width="225">ΠΛΑΤΕΙΑ</td>
      <td width="225">ΣΥΡΑΚΟΥΣΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">110</td>
      <td width="111">060186</td>
      <td width="225">ΠΝΕΥΜΑΤΙΚΟ    ΚΕΝΤΡΟ</td>
      <td width="225">ΚΡΕΟΝΤΟΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">111</td>
      <td width="111">060033</td>
      <td width="225">ΠΟΛΥΤΕΧΝΕΙΟ</td>
      <td width="225">ΜΠΟΥΜΠΟΥΛΙΝΑΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">112</td>
      <td width="111">060936</td>
      <td width="225">ΠΟΣΕΙΔΩΝΑΣ</td>
      <td width="225">ΦΟΡΜΙΩΝΟΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">113</td>
      <td width="111">060954</td>
      <td width="225">ΠΥΘΩΝΟΣ</td>
      <td width="225">ΔΑΦΝΙΔΟΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">114</td>
      <td width="111">060750</td>
      <td width="225">ΡΙΖΑΡΗ</td>
      <td width="225">ΡΙΖΑΡΗ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">115</td>
      <td width="111">060157</td>
      <td width="225">ΣΙΔΕΡΑ</td>
      <td width="225">ΣΕΠΟΛΙΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">116</td>
      <td width="111">060544</td>
      <td width="225">ΣΚΥΡΟΥ</td>
      <td width="225">ΚΕΡΚΥΡΑΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">117</td>
      <td width="111">060898</td>
      <td width="225">ΣΠΙΤΙ    ΤΟΥ ΗΘΟΠΟΙΟΥ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">118</td>
      <td width="111">060916</td>
      <td width="225">ΣΠΙΤΙ    ΤΟΥ ΗΘΟΠΟΙΟΥ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">119</td>
      <td width="111">061385</td>
      <td width="225">ΣΤ.Ν.ΚΟΣΜΟΥ</td>
      <td width="225">ΗΛΙΑ    ΗΛΙΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">120</td>
      <td width="111">061319</td>
      <td width="225">ΣΤ.ΠΑΝΟΡΜΟΥ</td>
      <td width="225">ΠΑΝΟΡΜΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">121</td>
      <td width="111">061196</td>
      <td width="225">ΣΧΟΛΕΙΑ</td>
      <td width="225">ΚΟΥΡΤΙΔΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">122</td>
      <td width="111">060437</td>
      <td width="225">ΣΧΟΛΕΙΑ    ΓΚΡΑΒΑΣ</td>
      <td width="225">ΤΑΥΓΕΤΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">123</td>
      <td width="111">061105</td>
      <td width="225">ΥΜΗΤΤΟΥ</td>
      <td width="225">ΑΛΚΕΤΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">124</td>
      <td width="111">060953</td>
      <td width="225">ΦΑΕΘΩΝΤΟΣ</td>
      <td width="225">ΔΑΦΝΙΔΟΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">125</td>
      <td width="111">060741</td>
      <td width="225">ΦΙΛΟΛΑΟΥ</td>
      <td width="225">ΦΡΥΝΗΣ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">126</td>
      <td width="111">060894</td>
      <td width="225">ΧΕΥΔΕΝ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">127</td>
      <td width="111">060920</td>
      <td width="225">ΧΕΥΔΕΝ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">128</td>
      <td width="111">060764</td>
      <td width="225">ΧΙΛΤΟΝ</td>
      <td width="225">ΒΑΣ.ΑΛΕΞΑΝΔΡΟΥ</td>
      <td width="225">ΑΘΗΝΑΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">129</td>
      <td width="111">070015</td>
      <td width="225">ΑΓ.ΓΕΩΡΓΙΟΣ</td>
      <td width="225">ΙΕΡΑΣ    ΟΔΟΥ</td>
      <td width="225">ΑΙΓΑΛΕΩ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">130</td>
      <td width="111">090167</td>
      <td width="225">INTERAMERIKAN</td>
      <td width="225">ΑΓ.ΚΩΝΣΤΑΝΤΙΝΟΥ</td>
      <td width="225">ΑΜΑΡΟΥΣΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">131</td>
      <td width="111">090075</td>
      <td width="225">ΕΜΠ.ΚΕΝΤΡΟ</td>
      <td width="225">ΑΓ.ΚΩΝΣΤΑΝΤΙΝΟΥ</td>
      <td width="225">ΑΜΑΡΟΥΣΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">132</td>
      <td width="111">100186</td>
      <td width="225">ΚΑΡΑΙΣΚΑΚΗ</td>
      <td width="225">ΔΙΑΝΘΟΥ(ΜΟΡΝΟΥ)</td>
      <td width="225">ΦΥΛΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">133</td>
      <td width="111">100181</td>
      <td width="225">ΠΑΝΟΡΑΜΑ</td>
      <td width="225">ΔΙΑΝΘΟΥ(ΜΟΡΝΟΥ)</td>
      <td width="225">ΦΥΛΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">134</td>
      <td width="111">110036</td>
      <td width="225">4η    ΑΡΓΥΡΟΥΠΟΛΕΩΣ</td>
      <td width="225">ΓΕΡΟΥΛΑΝΟΥ</td>
      <td width="225">ΕΛΛΗΝΙΚΟΥ-ΑΡΓΥΡΟΥΠΟΛΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">135</td>
      <td width="111">110045</td>
      <td width="225">ΠΛ.ΗΡΩΩΝ    ΠΟΛΥΤΕΧΝΕΙΟΥ</td>
      <td width="225">ΓΕΡΟΥΛΑΝΟΥ</td>
      <td width="225">ΕΛΛΗΝΙΚΟΥ-ΑΡΓΥΡΟΥΠΟΛΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">136</td>
      <td width="111">110055</td>
      <td width="225">ΦΑΡΜΑΚΕΙΟ</td>
      <td width="225">ΓΕΩΓ.ΠΑΠΑΝΔΡΕΟΥ</td>
      <td width="225">ΕΛΛΗΝΙΚΟΥ-ΑΡΓΥΡΟΥΠΟΛΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">137</td>
      <td width="111">130081</td>
      <td width="225">10η    ΘΡΑΚΟΜΑΚΕΔΟΝΩΝ</td>
      <td width="225">ΘΡΑΚΟΜΑΚΕΔΟΝΩΝ</td>
      <td width="225">ΑΧΑΡΝΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">138</td>
      <td width="111">140003</td>
      <td width="225">ΑΓΟΡΑ    ΒΥΡΩΝΑ</td>
      <td width="225">ΛΕΩΦ.ΚΥΠΡΟΥ</td>
      <td width="225">ΒΥΡΩΝΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">139</td>
      <td width="111">140068</td>
      <td width="225">ΒΟΥΤΖΑ</td>
      <td width="225">ΒΟΥΤΖΑ</td>
      <td width="225">ΒΥΡΩΝΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">140</td>
      <td width="111">140025</td>
      <td width="225">ΔΗΜΑΡΧΕΙΟ</td>
      <td width="225">ΛΕΩΦ.ΧΡ.ΣΜΥΡΝΗΣ</td>
      <td width="225">ΒΥΡΩΝΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">141</td>
      <td width="111">140006</td>
      <td width="225">ΙΚΑ</td>
      <td width="225">ΚΑΡΑΟΛΗ    &amp; ΔΗΜΗΤΡΙΟΥ</td>
      <td width="225">ΒΥΡΩΝΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">142</td>
      <td width="111">140047</td>
      <td width="225">ΠΑΛΑΙΟ    ΤΕΡΜΑ</td>
      <td width="225">ΤΜΩΛΟΥ</td>
      <td width="225">ΒΥΡΩΝΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">143</td>
      <td width="111">140030</td>
      <td width="225">ΦΟΥΡΝΟΣ</td>
      <td width="225">ΚΟΛΟΚΟΤΡΩΝΗ</td>
      <td width="225">ΒΥΡΩΝΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">144</td>
      <td width="111">160002</td>
      <td width="225">ΤΡΑΠΕΖΑ</td>
      <td width="225">ΓΡ.ΛΑΜΠΡΑΚΗ</td>
      <td width="225">ΓΛΥΦΑΔΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">145</td>
      <td width="111">170046</td>
      <td width="225">ΤΕΡΜΑ</td>
      <td width="225">ΛΕΩΦ.ΑΛ.ΠΑΠΑΝΑΣΤΑΣΙΟΥ</td>
      <td width="225">ΔΑΦΝΗΣ-ΥΜΗΤΤΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">146</td>
      <td width="111">200013</td>
      <td width="225">10η    ΖΩΓΡΑΦΟΥ</td>
      <td width="225">ΗΡΩΩΝ    ΠΟΛΥΤΕΧΝΕΙΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">147</td>
      <td width="111">200011</td>
      <td width="225">10η    ΖΩΓΡΑΦΟΥ</td>
      <td width="225">ΚΟΥΣΙΔΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">148</td>
      <td width="111">200065</td>
      <td width="225">2η    ΖΩΓΡΑΦΟΥ</td>
      <td width="225">ΛΕΩΦ.ΣΤΡ\ΧΟΥ    ΠΑΠΑΓΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">149</td>
      <td width="111">200050</td>
      <td width="225">2η    ΙΛΙΣΙΩΝ</td>
      <td width="225">ΛΕΩΦ.ΓΡΗΓ.ΑΥΞΕΝΤΙΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">150</td>
      <td width="111">200059</td>
      <td width="225">3η    ΙΛΙΣΙΩΝ</td>
      <td width="225">ΛΕΩΦ.ΓΡΗΓ.ΑΥΞΕΝΤΙΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">151</td>
      <td width="111">200058</td>
      <td width="225">3η    ΙΛΙΣΙΩΝ</td>
      <td width="225">ΛΕΩΦ.ΓΡΗΓ.ΑΥΞΕΝΤΙΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">152</td>
      <td width="111">200040</td>
      <td width="225">4η    ΙΛΙΣΙΩΝ</td>
      <td width="225">ΛΕΩΦ.ΓΡΗΓ.ΑΥΞΕΝΤΙΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">153</td>
      <td width="111">200048</td>
      <td width="225">4η    ΙΛΙΣΙΩΝ</td>
      <td width="225">ΛΕΩΦ.ΓΡΗΓ.ΑΥΞΕΝΤΙΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">154</td>
      <td width="111">200042</td>
      <td width="225">6η    ΙΛΙΣΙΩΝ</td>
      <td width="225">ΜΟΥΣΚΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">155</td>
      <td width="111">200014</td>
      <td width="225">9η    ΖΩΓΡΑΦΟΥ</td>
      <td width="225">ΗΡΩΩΝ    ΠΟΛΥΤΕΧΝΕΙΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">156</td>
      <td width="111">200010</td>
      <td width="225">9η    ΖΩΓΡΑΦΟΥ</td>
      <td width="225">ΚΟΥΣΙΔΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">157</td>
      <td width="111">200004</td>
      <td width="225">ΑΝΟΙΞΗ</td>
      <td width="225">ΛΕΩΦ.ΣΤΡ\ΧΟΥ    ΠΑΠΑΓΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">158</td>
      <td width="111">200001</td>
      <td width="225">ΕΥΔΑΠ</td>
      <td width="225">ΙΛΙΣΙΩΝ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">159</td>
      <td width="111">200020</td>
      <td width="225">ΙΚΑ</td>
      <td width="225">ΛΕΩΦ.ΣΤΡ\ΧΟΥ    ΠΑΠΑΓΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">160</td>
      <td width="111">200066</td>
      <td width="225">ΙΚΑ</td>
      <td width="225">ΛΕΩ.    ΓΕΩΡ.ΠΑΠΑΝΔΡΕΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">161</td>
      <td width="111">200019</td>
      <td width="225">ΚΟΤΟΠΟΥΛΗ</td>
      <td width="225">ΛΕΩΦ.ΣΤΡ\ΟΥ    ΠΑΠΑΓΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">162</td>
      <td width="111">200006</td>
      <td width="225">ΤΣΙΤΟΥΡΑ</td>
      <td width="225">ΛΕΩΦ.ΣΤΡ\ΧΟΥ    ΠΑΠΑΓΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">163</td>
      <td width="111">200018</td>
      <td width="225">ΤΣΙΤΟΥΡΑ</td>
      <td width="225">ΛΕΩΦ.ΣΤΡ\ΧΟΥ    ΠΑΠΑΓΟΥ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">164</td>
      <td width="111">200073</td>
      <td width="225">ΥΠΕΡΑΓΟΡΑ</td>
      <td width="225">ΟΥΛΩΦ    ΠΑΛΜΕ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">165</td>
      <td width="111">060924</td>
      <td width="225">1η    ΙΛΙΣΙΩΝ</td>
      <td width="225">ΝΥΜΦΑΙΩΝ</td>
      <td width="225">ΖΩΓΡΑΦΟΥ&nbsp;</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">166</td>
      <td width="111">210060</td>
      <td width="225">ΚΛΕΙΟΥΣ</td>
      <td width="225">ΤΣΑΜΑΔΟΥ</td>
      <td width="225">ΗΛΙΟΥΠΟΛΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">167</td>
      <td width="111">210022</td>
      <td width="225">ΠΑΠΑΓΟΥ</td>
      <td width="225">ΑΛ.ΠΑΝΑΓΟΥΛΗ</td>
      <td width="225">ΗΛΙΟΥΠΟΛΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">168</td>
      <td width="111">210132</td>
      <td width="225">ΣΠ.ΜΗΛΙΟΥ</td>
      <td width="225">ΤΣΑΜΑΔΟΥ</td>
      <td width="225">ΗΛΙΟΥΠΟΛΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">169</td>
      <td width="111">230017</td>
      <td width="225">10η    ΚΑΙΣΑΡΙΑΝΗΣ</td>
      <td width="225">ΕΘΝΙΚΗΣ    ΑΝΤΙΣΤΑΣΗΣ</td>
      <td width="225">ΚΑΙΣΑΡΙΑΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">170</td>
      <td width="111">230016</td>
      <td width="225">11η    ΚΑΙΣΑΡΙΑΝΗΣ</td>
      <td width="225">ΕΘΝΙΚΗΣ    ΑΝΤΙΣΤΑΣΕΩΣ</td>
      <td width="225">ΚΑΙΣΑΡΙΑΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">171</td>
      <td width="111">230019</td>
      <td width="225">8η    ΚΑΙΣΑΡΙΑΝΗΣ</td>
      <td width="225">ΕΘΝΙΚΗΣ    ΑΝΤΙΣΤΑΣΗΣ</td>
      <td width="225">ΚΑΙΣΑΡΙΑΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">172</td>
      <td width="111">230018</td>
      <td width="225">9η    ΚΑΙΣΑΡΙΑΝΗΣ</td>
      <td width="225">ΕΘΝΙΚΗΣ    ΑΝΤΙΣΤΑΣΗΣ</td>
      <td width="225">ΚΑΙΣΑΡΙΑΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">173</td>
      <td width="111">230031</td>
      <td width="225">ΔΗΜΑΡΧΕΙΟ</td>
      <td width="225">ΕΘΝΙΚΗΣ    ΑΝΤΙΣΤΑΣΗΣ</td>
      <td width="225">ΚΑΙΣΑΡΙΑΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">174</td>
      <td width="111">230020</td>
      <td width="225">ΠΑΝΑΓΙΤΣΑ</td>
      <td width="225">ΕΘΝΙΚΗΣ    ΑΝΤΙΣΤΑΣΗΣ</td>
      <td width="225">ΚΑΙΣΑΡΙΑΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">175</td>
      <td width="111">230009</td>
      <td width="225">ΠΑΝΑΓΙΤΣΑ</td>
      <td width="225">ΕΘΝΙΚΗΣ    ΑΝΤΙΣΤΑΣΕΩΣ</td>
      <td width="225">ΚΑΙΣΑΡΙΑΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">176</td>
      <td width="111">230021</td>
      <td width="225">ΦΑΡΜΑΚΕΙΟ</td>
      <td width="225">ΕΘΝΙΚΗΣ    ΑΝΤΙΣΤΑΣΗΣ</td>
      <td width="225">ΚΑΙΣΑΡΙΑΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">177</td>
      <td width="111">230008</td>
      <td width="225">ΦΑΡΜΑΚΕΙΟ</td>
      <td width="225">ΕΘΝΙΚΗΣ    ΑΝΤΙΣΤΑΣΕΩΣ</td>
      <td width="225">ΚΑΙΣΑΡΙΑΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">178</td>
      <td width="111">240042</td>
      <td width="225">10η    ΚΑΛΛΙΘΕΑΣ</td>
      <td width="225">ΔΗΜΟΣΘΕΝΟΥΣ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">179</td>
      <td width="111">240054</td>
      <td width="225">1η    ΧΑΡΟΚΟΠΟΥ</td>
      <td width="225">ΧΑΡΟΚΟΠΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">180</td>
      <td width="111">240115</td>
      <td width="225">1η    ΧΑΡΟΚΟΠΟΥ</td>
      <td width="225">ΑΓ.ΠΑΝΤΩΝ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">181</td>
      <td width="111">240114</td>
      <td width="225">2η    ΑΓ.ΠΑΝΤΩΝ</td>
      <td width="225">ΑΓ.ΠΑΝΤΩΝ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">182</td>
      <td width="111">240104</td>
      <td width="225">2η    ΧΑΡΟΚΟΠΟΥ</td>
      <td width="225">ΧΑΡΟΚΟΠΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">183</td>
      <td width="111">240087</td>
      <td width="225">ΑΓ.ΕΛΕΟΥΣΑ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">184</td>
      <td width="111">240099</td>
      <td width="225">ΑΓ.ΠΑΝΤΕΣ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">185</td>
      <td width="111">240113</td>
      <td width="225">ΑΓ.ΠΑΝΤΩΝ</td>
      <td width="225">ΑΓ.ΠΑΝΤΩΝ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">186</td>
      <td width="111">240094</td>
      <td width="225">ΑΓΙΑ    ΕΛΕΟΥΣΑ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">187</td>
      <td width="111">240072</td>
      <td width="225">ΑΘΗΝΑΣ</td>
      <td width="225">ΔΟΙΡΑΝΗΣ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">188</td>
      <td width="111">240046</td>
      <td width="225">ΔΑΒΑΚΗ</td>
      <td width="225">ΔΗΜΟΣΘΕΝΟΥΣ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">189</td>
      <td width="111">240063</td>
      <td width="225">ΔΕΗ</td>
      <td width="225">ΔΑΒΑΚΗ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">190</td>
      <td width="111">240067</td>
      <td width="225">ΔΕΗ</td>
      <td width="225">ΔΑΒΑΚΗ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">191</td>
      <td width="111">240082</td>
      <td width="225">ΔΗΜΗΤΡΑΚΟΠΟΥΛΟΥ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">192</td>
      <td width="111">240047</td>
      <td width="225">ΔΗΜΗΤΡΑΚΟΠΟΥΛΟΥ</td>
      <td width="225">ΔΗΜΟΣΘΕΝΟΥΣ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">193</td>
      <td width="111">240078</td>
      <td width="225">ΔΗΜΟΤΙΚΟΥ    ΣΤΑΔΙΟΥ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">194</td>
      <td width="111">240051</td>
      <td width="225">ΔΗΜΟΤΙΚΟΥ    ΣΤΑΔΙΟΥ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">195</td>
      <td width="111">240092</td>
      <td width="225">ΙΖΟΛΑ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">196</td>
      <td width="111">240064</td>
      <td width="225">ΙΚΑ</td>
      <td width="225">ΔΑΒΑΚΗ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">197</td>
      <td width="111">240065</td>
      <td width="225">ΙΚΑ</td>
      <td width="225">ΔΑΒΑΚΗ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">198</td>
      <td width="111">240086</td>
      <td width="225">Κ.Ε.Α.Τ.    ΠΡ.ΟΙΚΟΣ ΤΥΦΛΩΝ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">199</td>
      <td width="111">240095</td>
      <td width="225">Κ.Ε.Α.Τ.    ΠΡ.ΟΙΚΟΣ ΤΥΦΛΩΝ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">200</td>
      <td width="111">240083</td>
      <td width="225">ΚΑΛΛΙΘΕΑ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">201</td>
      <td width="111">240098</td>
      <td width="225">ΚΑΛΛΙΘΕΑ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">202</td>
      <td width="111">240079</td>
      <td width="225">ΚΑΡΑΓΙΑΝΝΗ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">203</td>
      <td width="111">240050</td>
      <td width="225">ΚΑΡΑΓΙΑΝΝΗ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">204</td>
      <td width="111">240091</td>
      <td width="225">ΠΕΙΣΙΣΤΡΑΤΟΥ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">205</td>
      <td width="111">240084</td>
      <td width="225">ΠΛ.ΔΑΒΑΚΗ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">206</td>
      <td width="111">240097</td>
      <td width="225">ΠΛ.ΔΑΒΑΚΗ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">207</td>
      <td width="111">240062</td>
      <td width="225">ΠΛ.ΔΑΒΑΚΗ</td>
      <td width="225">ΔΑΒΑΚΗ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">208</td>
      <td width="111">240068</td>
      <td width="225">ΠΛ.ΔΑΒΑΚΗ</td>
      <td width="225">ΔΑΒΑΚΗ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">209</td>
      <td width="111">240088</td>
      <td width="225">ΠΥΡΟΣΒΕΣΤΙΚΗ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">210</td>
      <td width="111">240093</td>
      <td width="225">ΠΥΡΟΣΒΕΣΤΙΚΗ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">211</td>
      <td width="111">240096</td>
      <td width="225">ΣΚΡΑ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">212</td>
      <td width="111">240045</td>
      <td width="225">ΣΚΡΑ</td>
      <td width="225">ΔΗΜΟΣΘΕΝΟΥΣ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">213</td>
      <td width="111">240044</td>
      <td width="225">ΣΠΑΡΤΗΣ</td>
      <td width="225">ΔΗΜΟΣΘΕΝΟΥΣ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">214</td>
      <td width="111">240090</td>
      <td width="225">ΤΖΙΤΖΙΦΙΕΣ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">215</td>
      <td width="111">240074</td>
      <td width="225">ΦΑΡΟΣ    ΤΥΦΛΩΝ</td>
      <td width="225">ΑΘΗΝΑΣ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">216</td>
      <td width="111">240080</td>
      <td width="225">ΧΑΡΟΚΟΠΟΥ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">217</td>
      <td width="111">240100</td>
      <td width="225">ΧΑΡΟΚΟΠΟΥ</td>
      <td width="225">ΕΛ.ΒΕΝΙΖΕΛΟΥ</td>
      <td width="225">ΚΑΛΛΙΘΕΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">218</td>
      <td width="111">640010</td>
      <td width="225">ΓΟΥΝΑΡΗ</td>
      <td width="225">Π.ΤΣΑΛΔΑΡΗ</td>
      <td width="225">ΜΕΛΙΣΣΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">219</td>
      <td width="111">640009</td>
      <td width="225">ΔΙΑΣΤΑΥΡΩΣΗ</td>
      <td width="225">Π.ΤΣΑΛΔΑΡΗ</td>
      <td width="225">ΜΕΛΙΣΣΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">220</td>
      <td width="111">640011</td>
      <td width="225">ΠΑΠΑΔΗΜΗΤΡΙΟΥ</td>
      <td width="225">Π.ΤΣΑΛΔΑΡΗ</td>
      <td width="225">ΜΕΛΙΣΣΙΩΝ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">221</td>
      <td width="111">670012</td>
      <td width="225">ΠΛ.Ν.ΠΕΝΤΕΛΗΣ</td>
      <td width="225">ΠΛ.ΗΡΩΩΝ    ΠΟΛΥΤΕΧΝΕΙΟΥ</td>
      <td width="225">&nbsp;ΠΕΝΤΕΛΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">222</td>
      <td width="111">060950</td>
      <td width="225">2η    ΑΙΓΑΙΟΥ</td>
      <td width="225">ΚΡΑΤΗΤΟΣ</td>
      <td width="225">Ν.    ΣΜΥΡΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">223</td>
      <td width="111">340002</td>
      <td width="225">ΔΗΜΑΡΧΕΙΟ</td>
      <td width="225">Κ.ΠΑΛΑΙΟΛΟΓΟΥ</td>
      <td width="225">Ν.    ΣΜΥΡΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">224</td>
      <td width="111">340073</td>
      <td width="225">ΔΗΜΑΡΧΕΙΟ</td>
      <td width="225">ΟΜΗΡΟΥ</td>
      <td width="225">Ν.    ΣΜΥΡΝΗΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">225</td>
      <td width="111">340103</td>
      <td width="225">ΠΛ.Ν.ΣΜΥΡΝΗΣ</td>
      <td width="225">ΟΜΗΡΟΥ</td>
      <td width="225">Ν.    ΣΜΥΡΝΗΣ</td>
    </tr>
    <tr height="40">
      <td width="58" height="40">226</td>
      <td width="111">680005</td>
      <td width="225">ΚΑΝΑΚΗ</td>
      <td width="225">ΛΕΩΦ.ΔΕΚΕΛΕΙΑΣ</td>
      <td width="225">Ν.    ΧΑΛΚΗΔΟΝΑΣ - Ν. ΦΙΛΑΔΕΛΦΕΙΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">227</td>
      <td width="111">370026</td>
      <td width="225">ΚΡΑΤΙΚΟ    ΝΟΣΟΚΟΜΕΙΟ</td>
      <td width="225">Π.ΡΑΛΛΗ</td>
      <td width="225">ΝΙΚΑΙΑΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">228</td>
      <td width="111">040082</td>
      <td width="225">6η    ΑΓ.ΒΑΡΒΑΡΑΣ</td>
      <td width="225">ΑΓ.ΒΑΡΒΑΡΑΣ</td>
      <td width="225">ΠΑΛ.ΦΑΛΗΡΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">229</td>
      <td width="111">490025</td>
      <td width="225">ΔΗΜΑΡΧΕΙΟ-ΠΕΡΙΚΛΕΟΥΣ</td>
      <td width="225">ΠΕΡΙΚΛΕΟΥΣ</td>
      <td width="225">ΠΑΠΑΓΟΥ-ΧΟΛΑΡΓΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">230</td>
      <td width="111">710004</td>
      <td width="225">ΣΤΡΑΤΟΠΕΔΟ</td>
      <td width="225">ΚΥΠΡΟΥ</td>
      <td width="225">ΠΑΠΑΓΟΥ-ΧΟΛΑΡΓΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">231</td>
      <td width="111">400182</td>
      <td width="225">ΑΓ.ΔΗΜΗΤΡΙΟΥ</td>
      <td width="225">ΑΓΧΙΑΛΟΥ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">232</td>
      <td width="111">400405</td>
      <td width="225">ΛΙΜΗΝ    ΖΕΑΣ</td>
      <td width="225">ΑΚΤΗ    ΜΟΥΤΣΟΠΟΥΛΟΥ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">233</td>
      <td width="111">400430</td>
      <td width="225">ΛΙΜΗΝ    ΖΕΑΣ</td>
      <td width="225">ΑΚΤΗ    ΜΟΥΤΣΟΠΟΥΛΟΥ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">234</td>
      <td width="111">400127</td>
      <td width="225">ΠΑΛ.ΤΕΡΜΑ</td>
      <td width="225">ΣΑΧΤΟΥΡΗ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">235</td>
      <td width="111">400133</td>
      <td width="225">ΠΑΛΑΜΗΔΙΟΥ</td>
      <td width="225">ΜΑΥΡΟΜΙΧΑΛΗ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">236</td>
      <td width="111">400132</td>
      <td width="225">ΠΑΠΑΣΤΡΑΤΟΥ</td>
      <td width="225">ΜΑΥΡΟΜΙΧΑΛΗ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">237</td>
      <td width="111">400504</td>
      <td width="225">ΠΛ.    ΤΕΡΨΙΘΕΑΣ</td>
      <td width="225">&nbsp;</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">238</td>
      <td width="111">400407</td>
      <td width="225">ΣΑΝΤΑΡΟΖΑ</td>
      <td width="225">ΑΚΤΗ    ΜΟΥΤΣΟΠΟΥΛΟΥ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">239</td>
      <td width="111">400406</td>
      <td width="225">ΣΥΡΑΓΓΕΙΟΥ</td>
      <td width="225">ΑΚΤΗ    ΜΟΥΤΣΟΠΟΥΛΟΥ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">240</td>
      <td width="111">400012</td>
      <td width="225">ΣΩΡΑ</td>
      <td width="225">ΘΕΟΤΟΚΗ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">241</td>
      <td width="111">400446</td>
      <td width="225">ΤΖΑΝΕΙΟ</td>
      <td width="225">ΖΑΝΝΗ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">242</td>
      <td width="111">400308</td>
      <td width="225">ΥΠΑΠΑΝΤΗΣ</td>
      <td width="225">ΑΓΧΙΑΛΟΥ</td>
      <td width="225">ΠΕΙΡΑΙΑ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">243</td>
      <td width="111">410041</td>
      <td width="225">ΗΡΩΩΝ    ΠΟΛΥΤΕΧΝΕΙΟΥ</td>
      <td width="225">ΛΕΩΦ.ΔΗΜΟΚΡΑΤΙΑΣ</td>
      <td width="225">ΠΕΡΑΜΑΤΟΣ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">244</td>
      <td width="111">420208</td>
      <td width="225">3η    ΖΩΟΔΟΧΟΥ ΠΗΓΗΣ</td>
      <td width="225">ΑΓ.ΠΑΡΑΣΚΕΥΗΣ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">245</td>
      <td width="111">420166</td>
      <td width="225">ΑΓ.ΚΗΡΥΚΟΣ</td>
      <td width="225">ΑΞΑΡΙΟΥ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">246</td>
      <td width="111">420155</td>
      <td width="225">ΑΛΕΞΑΝΔΡΑΣ</td>
      <td width="225">ΤΖΩΝ    ΚΕΝΝΕΝΤΥ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">247</td>
      <td width="111">420153</td>
      <td width="225">ΑΝΑΓΝΩΣΤΑΡΑ</td>
      <td width="225">ΦΙΛΙΚΩΝ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">248</td>
      <td width="111">420226</td>
      <td width="225">ΑΡΓΥΡΟΚΑΣΤΡΟΥ</td>
      <td width="225">ΑΞΑΡΙΟΥ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">249</td>
      <td width="111">420156</td>
      <td width="225">ΓΥΜΝΑΣΙΟ</td>
      <td width="225">ΤΖΩΝ    ΚΕΝΝΕΝΤΥ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">250</td>
      <td width="111">420196</td>
      <td width="225">ΕΚΑΤΟΔΕΝΔΡΑ</td>
      <td width="225">ΠΕΛΑΣΓΙΑΣ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">251</td>
      <td width="111">420101</td>
      <td width="225">ΕΚΑΤΟΔΕΝΔΡΑ</td>
      <td width="225">ΠΕΛΑΣΓΙΑΣ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">252</td>
      <td width="111">420102</td>
      <td width="225">ΙΚΑ</td>
      <td width="225">ΒΑΣ.ΑΛΕΞΑΝΔΡΟΥ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">253</td>
      <td width="111">420088</td>
      <td width="225">ΙΚΑ</td>
      <td width="225">ΒΑΣ.ΑΛΕΞΑΝΔΡΟΥ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">254</td>
      <td width="111">420189</td>
      <td width="225">ΠΛ.ΔΑΣΚΑΛΟΓΙΑΝΝΗ</td>
      <td width="225">ΠΛ.ΔΑΣΚΑΛΟΓΙΑΝΝΗ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">255</td>
      <td width="111">420288</td>
      <td width="225">ΤΑΞΙΑΡΧΗΣ</td>
      <td width="225">ΣΑΡΑΝΤΑΠΟΡΟΥ</td>
      <td width="225">ΠΕΡΙΣΤΕΡΙΟΥ</td>
    </tr>
    <tr height="20">
      <td width="58" height="20">256</td>
      <td width="111">430003</td>
      <td width="225">ΔΗΜΑΡΧΕΙΟ</td>
      <td width="225">25ης    ΜΑΡΤΙΟΥ</td>
      <td width="225">ΠΕΤΡΟΥΠΟΛΗΣ</td>
    </tr>
    <tr height="21">
      <td width="58" height="21">257</td>
      <td width="111">430004</td>
      <td width="225">ΠΑΛ.ΤΕΡΜΑ</td>
      <td width="225">25ης    ΜΑΡΤΙΟΥ</td>
      <td width="225">ΠΕΤΡΟΥΠΟΛΗΣ</td>
    </tr>
  </tbody></table>');}
?>