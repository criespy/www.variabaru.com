// JScript File
function ResizeImage(img, mWidth, mHeight){
    var image=new Image();
    image.src=img.src;
   
  var oldW = image.width;
  var oldH = image.height;
 // alert("oldwide:"+oldW+"oldHieght:"+oldH);
    
    if(image.width > 0 && image.height > 0){
        if(image.width/image.height >= mWidth/mHeight){
            if(image.width > mWidth){ 
         //   alert("1");
                img.width = mWidth;
                img.height = (image.height * mWidth)/image.width;
            }else{
         //   alert("2");
                img.width=image.width; 
                img.height=image.height;
            }
        }else{
            if(image.height>mHeight){
          //  alert("3"); 
                img.height = mHeight;
                img.width = (image.width * mHeight)/image.height; 
            }else{
          //  alert("4");
                img.width=image.width; 
                img.height = image.height;
            }
        }
    }
   
}