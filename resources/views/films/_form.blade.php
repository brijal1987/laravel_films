  <div class="row">
    <div class="col-md-8">
      <div class="form-group row">
        <label class="col-md-push-1 col-md-3" for="Film name">Name or Slug</label>
        <input type="text" class="form-control col-md-push-2 col-md-5 required" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter Film Name" value="<?php echo old('name')?old('name'):(isset($film['name'] )? $film['name'] : "");?>">
      </div>

      <div class="form-group row">
        <label class="col-md-push-1 col-md-3" for="Film description">Description</label>
        <textarea class="form-control col-md-push-2 col-md-5 required" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Enter Film Description"><?php echo old('description')?old('description'):(isset($film['description'] )? $film['description'] : "");?></textarea>  
      </div>
    
      <div class="form-group row">
        <label class="col-md-push-1 col-md-3" for="Film Price">Price </label>
        <input type="number" class="form-control col-md-push-2 col-md-5 required number" id="Price" name="price" aria-describedby="PriceHelp" placeholder="Enter Film Price" value="<?php echo old('price')?old('price'):(isset($film['price'] )? $film['price'] : "");?>">
      </div>

      <div class="form-group row">
        <label class="col-md-push-1 col-md-3" for="Country">Country</label>
        <input type="text" class="form-control col-md-push-2 col-md-5 required" id="country" name="country" aria-describedby="countryHelp" placeholder="Enter Film Country" value="<?php echo old('country')?old('country'):(isset($film['country'] )? $film['country'] : "");?>">
      </div>

      <div class="form-group row">
        <label class="col-md-push-1 col-md-3" for="Film Photo">Photo </label>
        <input type="file" class="form-control col-md-push-2 col-md-5 required" id="photo" name="photo" aria-describedby="photoHelp" placeholder="Enter Film Photo" value="<?php echo old('photo')?old('photo'):(isset($film['photo'] )? $film['photo'] : "");?>">
      </div>
    </div>
      

  </div>