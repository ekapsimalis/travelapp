// alert('It Works!');
    var slider = document.querySelectorAll('.slider');
     M.Slider.init(slider, {
        indicators: true,
        height: 500,		
        interval: 6000
     });
     
     var parallax = document.querySelectorAll('.parallax');
     M.Parallax.init(parallax, {
        responsiveThreshold: 10,
     });

     var select = document.querySelectorAll('select');
     M.FormSelect.init(select);

     var instance = M.FormSelect.getInstance(select);

 
        