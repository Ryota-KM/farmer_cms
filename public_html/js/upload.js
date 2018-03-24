$.ajax({
  cache: false,
  success: function() {
    $("#myfile").on("change", function(event){
      var file = event.target.files[0];
      var reader = new FileReader();
      reader.onload = function(e){
        $("#new-image").attr("src", e.target.result);
      };
      reader.readAsDataURL(file);
    });

    for(var i =1; i < 20; i++) {
      (function(j) {
        $('#file-num' + j).change(function(e){
          $("#img-num" + j).empty()

          var file = e.target.files[0];
          var reader = new FileReader();

          if(file.type.indexOf("image") < 0){
            alert("画像ファイルを指定してください。");
            return false;
          }

          reader.onload = (function(file){
            return function(e){
              $("#img-num" + j).attr("src", e.target.result);
              $("#img" + j).attr("title", file.name);
            };
          })(file);
          reader.readAsDataURL(file);
        });
      })(i)
    }
  }
})
