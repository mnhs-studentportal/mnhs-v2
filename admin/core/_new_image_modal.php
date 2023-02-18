<form class="form-horizontal" method="post" enctype="multipart/form-data" id="carouselForm">
                
                <div class="form-group row">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Photo/Image</label>
                  <div class="col-sm-10 custom-file">
                  <input type="file" class="custom-file-input" id="fimage" name="fimage" required>
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Photo/Image Preview</label>
                  <div class="col-sm-10 custom-file" style="height: 400px;" id="fpreview">
                  
                </div>
                </div>
                <button type="button" name="submit" id="submit"class="btn btn-primary" id="saveNewFimage">Save New Image</button>
              </form>

              <script>
                  $('#submit').on('click',function(e){
                        e.preventDefault();
                       
                        alert();
                    });
                    
  
              </script>