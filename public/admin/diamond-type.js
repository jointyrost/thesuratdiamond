function updateFormFields() {
    const stoneType = document.getElementById('stoneType').value;
    const additionalFields = document.getElementById('additionalFields');
    additionalFields.innerHTML = ''; // Clear previous fields

    if (stoneType === 'natural-diamond') {
        additionalFields.innerHTML = 
          ` <div class="col-4 form-group ">
                <label for="diamond_category">Diamond Category</label>
                <select class="custom-select rounded-0" id="diamond_category" name="diamond_category"  onchange="updateStoneCatogerys()">
                        
                        <option value="">Select Option</option>
                        <option value="parcel">Parcel</option>
                        <option value="single_non_certified">Single Non Certified</option>
                        <option value="single_certified">Single Certified</option>
                </select>
                                
            </div>`
        ;
      } else if (stoneType === 'lab-grown-diamond') {
      additionalFields.innerHTML = 
        `       <div class="col-4 form-group ">
                    <label for="diamond_category">Diamond Category</label>
                    <select class="custom-select rounded-0" id="diamond_category" name="diamond_category"  onchange="updateStoneCatogerys()">
                        <option value="">Select Option</option>
                        <option value="parcel">Parcel</option>
                        <option value="single_non_certified">Single Non Certified</option>
                        <option value="single_certified">Single Certified</option>
                    </select>
                  
                </div>
                <div class="col-4">
                  <label for="process">Process</label>
                    <select class="custom-select rounded-0" name="process" id="process">
                      <option value="">Select Option</option>
                      <option value="CVD">CVD</option>
                      <option value="HPHT">HPHT</option>
                    </select>
                </div>
                `;
    } else if (stoneType === 'coloured-lab-grown-diamond') {
      additionalFields.innerHTML = 
        `       
                 <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Clarity</label>
                                <select class="custom-select rounded-0"  name="stone_clarity" id="stone_clarity">
                                    <option value="">Select Option</option>
                                    <option value="FL">FL</option>
                                    <option value="IF">IF</option>
                                    <option value="VVS1">VVS1</option>
                                    <option value="VVS2">VVS2</option>
                                    <option value="VS1">VS1</option>
                                    <option value="VS2">VS2</option>
                                    <option value="SI1">SI1</option>
                                    <option value="SI2">SI2</option>
                                    <option value="SI3">SI3</option>
                                    <option value="I1">I1</option>
                                    <option value="I2">I2</option>
                                    <option value="I3">I3</option>
                                    <option value="PK">PK</option>
                                    <option value="HPK">HPK</option>
                                </select> 
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
                `;
    } else if (stoneType === 'moissanite') {
      additionalFields.innerHTML = 
        `       
                 
                `;
    } else if (stoneType === 'sapphire') {
      additionalFields.innerHTML = 
        `       
               
                `;
    } 

  }