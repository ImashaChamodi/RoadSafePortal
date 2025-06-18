const img_con1=document.getElementById("image-cn1");
const img_con2=document.getElementById("image-cn2");
const img_con3=document.getElementById("image-cn3");

const image1=document.getElementById("image1");
const image2=document.getElementById("image2");
const image3=document.getElementById("image3");

image1.value = "";
image2.value="";
image3.value="";

let file;



img_con1.onclick = ()=>{
    image1.click();
};
img_con2.onclick = ()=>{
    image2.click();
};
img_con3.onclick = ()=>{
    image3.click();
};




image1.addEventListener("change", function(){
    file = this.files[0];
    
    showImage(img_con1,image1);
});
image2.addEventListener("change", function(){
    file = this.files[0];
    
    showImage(img_con2,image2);
});
image3.addEventListener("change", function(){
    file = this.files[0];
    
    showImage(img_con3,image3);
});




function showImage(div,input){
    
    let filetype = file.type;
    //console.log(filetype);

    let validExtensions = ["image/jpeg","image/png","image/jpg"];
    if(validExtensions.includes(filetype)){
        //console.log("valid file type");
        let fileReader = new FileReader();
        fileReader.onload = ()=>{
            let fileURL = fileReader.result; 
        
            let contenttag = `<img src="${fileURL}" alt="" width="100px" height="100px">`
            div.innerHTML = contenttag;
        }
        fileReader.readAsDataURL(file); 
    }else{
        //console.log("file type is not valid");
        alert("This file type is not valid!");
        input.value = ""; 
    }
}