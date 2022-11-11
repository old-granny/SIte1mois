<html>
    <form action="sellphp.php" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Name" name="nom">
        <input type="text" placeholder="Usage" name="usage">
        <input type="number" placeholder="price" name="prix">
        <input type="text" placeholder="how you want to sell" name="typedevente">
        <input type="text" placeholder="Description" name="description">

        
            <div id="Upload_image1">
                <label for="file1" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier1" id="file1"  onchange="loadFile1(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image1-->
                <p><img id="output1" width="200" /></p>
                <!--Image1-->
            </div>
            <?php 
             
            ?>
            <div id="Upload_image2" style="display: none;">
                <label for="file2" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier2" id="file2"  onchange="loadFile2(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image2-->
                <p><img id="output2" width="200" /></p>
                <!--Image2-->
            </div>

            <div id="Upload_image3" style="display: none;">
                <label for="file3" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier3" id="file3"  onchange="loadFile3(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image3-->
                <p><img id="output3" width="200" /></p>
                <!--Image3-->
            </div>

            <div id="Upload_image4" style="display: none;">
                <label for="file4" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier4" id="file4"  onchange="loadFile4(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image4-->
                <p><img id="output4" width="200" /></p>
                <!--Image4-->
            </div>
            <div id="Upload_image5" style="display: none;">
                <label for="file5" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier5" id="file5"  onchange="loadFile5(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image5-->
                <p><img id="output5" width="200" /></p>
                <!--Image5-->
            </div>
            <div id="Upload_image6" style="display: none;">
                <label for="file6" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier6" id="file6"  onchange="loadFile6(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image6-->
                <p><img id="output6" width="200" /></p>
                <!--Image6-->
            </div>
            <div id="Upload_image7" style="display: none;">
                <label for="file7" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier7" id="file7"  onchange="loadFile7(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image7-->
                <p><img id="output7" width="200" /></p>
                <!--Image7-->
            </div>
            <div id="Upload_image8" style="display: none;">
                <label for="file8" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier8" id="file8"  onchange="loadFile8(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image8-->
                <p><img id="output8" width="200" /></p>
                <!--Image8-->
            </div>
            <div id="Upload_image9" style="display: none;">
                <label for="file9" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier9" id="file9"  onchange="loadFile9(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image9-->
                <p><img id="output9" width="200" /></p>
                <!--Image9-->
            </div>
            <div id="Upload_image10" style="display: none;">
                <label for="file10" style="cursor: pointer;">Upload Image</label>
                <p><input type="file"  accept="image/*" name="fichier10" id="file10"  onchange="loadFile10(event)" style="display: none;" multiple="multiple" multiple></p>
                <!--Image10-->
                <p><img id="output10" width="200" /></p>
                <!--Image10-->
            </div>







        <button type="submit">Ready to sell?</button>
    </form>
    <a href="Index.php">Go Back Home</a>
    





<!--Image-->
<script>

//comment
var loadFile1 = function(event) {
	var image1 = document.getElementById('output1');
	image1.src = URL.createObjectURL(event.target.files[0]);
    <?php $empeche_de_voir = 1; ?>
    //cacher img2
    var x = document.getElementById("Upload_image2");
    
    if (x.style.display === "none" || staylock1 === TRUE) {
        x.style.display = "block";
        
    } else {
        x.style.display = "none";
        staylock1 = TRUE;
    }
    
   
};
var loadFile2 = function(event) {
	var image = document.getElementById('output2');
	image.src = URL.createObjectURL(event.target.files[0]);
    <?php $empeche_de_voir = 2; ?>
    //cacher img3
    var x = document.getElementById("Upload_image3");

    if (x.style.display === "none" || staylock2 === TRUE ) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        staylock2 = TRUE;
    }
    
   
};
var loadFile3 = function(event) {
	var image = document.getElementById('output3');
	image.src = URL.createObjectURL(event.target.files[0]);
    <?php $empeche_de_voir = 3; ?>
    //cacher img4
    var x = document.getElementById("Upload_image4");

    if (x.style.display === "none" || staylock3 === TRUE) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        staylock3 = TRUE;
    }
    
   
};
var loadFile4 = function(event) {
	var image = document.getElementById('output4');
	image.src = URL.createObjectURL(event.target.files[0]);

    //cacher img5
    var x = document.getElementById("Upload_image5");

    if (x.style.display === "none" || staylock4 === TRUE) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        staylock4 = TRUE
    }
    
   
};
var loadFile5 = function(event) {
	var image = document.getElementById('output5');
	image.src = URL.createObjectURL(event.target.files[0]);

    //cacher img6
    var x = document.getElementById("Upload_image6");

    if (x.style.display === "none" || staylock5 === TRUE) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        staylock5 = TRUE
    }
    
   
};
var loadFile6 = function(event) {
	var image = document.getElementById('output6');
	image.src = URL.createObjectURL(event.target.files[0]);

    //cacher img7
    var x = document.getElementById("Upload_image7");

    if (x.style.display === "none" || staylock6 === TRUE) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        staylock6 = TRUE
    }
    
   
};
var loadFile7 = function(event) {
	var image = document.getElementById('output7');
	image.src = URL.createObjectURL(event.target.files[0]);

    //cacher img8
    var x = document.getElementById("Upload_image8");
    if (x.style.display === "none" || staylock7 === TRUE) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        staylock7 = TRUE
    }
    
   
};
var loadFile8 = function(event) {
	var image = document.getElementById('output8');
	image.src = URL.createObjectURL(event.target.files[0]);

    //cacher img9
    var x = document.getElementById("Upload_image9");

    if (x.style.display === "none" || staylock8 === TRUE) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        staylock8 = TRUE
    }
    
   
};
var loadFile9 = function(event) {
	var image = document.getElementById('output9');
	image.src = URL.createObjectURL(event.target.files[0]);

    //cacher img10
    var x = document.getElementById("Upload_image10");

    if (x.style.display === "none" || staylock9 === TRUE) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        staylock9 = TRUE
    }
    
   
};
var loadFile10 = function(event) {
	var image = document.getElementById('output10');
	image.src = URL.createObjectURL(event.target.files[0]);

    
    
   
};



</script>
<!--Image-->
</html>