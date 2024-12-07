function updateStoneCatogerys() {
    const diamond_category = document.getElementById('diamond_category').value;
    const additionalFields = document.getElementById('additionalStoneType');
    additionalFields.innerHTML = ''; // Clear previous fields

   
        if (diamond_category === 'parcel') {
            additionalFields.innerHTML = `
            <div class="col-4 form-group ">
                <label for="sizeType">Size Type</label>
                <select class="custom-select rounded-0" id="sizeType" name="size_type" onchange="updateSizeOptions()">
                    <option value="">Select Size Type</option>
                    <option value="general">General</option>
                    <option value="sieve">Sieve</option>
                </select>
            </div>

             <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Clarity</label>
                                <select class="custom-select rounded-0"  name="stone_clarity" id="stone_clarity">
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
                            <div class="col-4 form-group">
                                <label for="shape">Carat</label>
                                <input type="text" class="form-control" name="stone_carat" id="stone_carat" placeholder="Enter Carat">
                                <span id="stone_carat-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Natts</label>
                                <select class="custom-select rounded-0" name="natts" id="natts">
                                  <option value="yes">Yes</option>
                                  <option value="no">No</option>
                                </select>
                                <span id="natts-error" class="invalid-feedback"></span>
                              </div>
                              
                            
                              <div class="col-4 form-group">
                                <label for="cut">Cut</label>
                                <select class="custom-select rounded-0" name="cut" id="cut">
                                    <option value="3EX">3EX</option>
                                    <option value="EX-">EX-</option>
                                    <option value="VG+">VG+</option>
                                    <option value="VG-">VG-</option>     
                                    <option value="Excellent">Excellent</option>
                                    <option value="Ideal">Ideal</option>
                                </select>
                                <span id="cut-error" class="invalid-feedback"></span>
                            </div>

                              <div class="col-4 form-group">
                                <label for="polish">Polish</label>
                                <select class="custom-select rounded-0" name="polish" id="polish">
                                    <option value="3EX">3EX</option>
                                    <option value="EX-">EX-</option>
                                    <option value="VG+">VG+</option>
                                    <option value="VG-">VG-</option>     
                                    <option value="Excellent">Excellent</option>
                                    <option value="Ideal">Ideal</option>
                                </select>
                                <span id="polish-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="symmetry">Symmetry</label>
                                <select class="custom-select rounded-0" name="symmetry" id="symmetry">
                                    <option value="3EX">3EX</option>
                                    <option value="EX-">EX-</option>
                                    <option value="VG+">VG+</option>
                                    <option value="VG-">VG-</option>     
                                    <option value="Excellent">Excellent</option>
                                    <option value="Ideal">Ideal</option>
                                </select>
                                <span id="symmetry-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="link">Link</label>
                                <input type="url" class="form-control" name="link" id="link" placeholder="Insert Link">
                                <span id="link-error" class="invalid-feedback"></span>
                            </div>


                            <div class="col-4 form-group">
                                <label for="fluorescence">Fluorescence</label>
                                <select class="custom-select rounded-0" name="fluorescence" id="fluorescence">
                                    <option value="none">None</option>
                                    <option value="very_light">Very Light</option>
                                    <option value="faint_light">Faint/Light</option>
                                    <option value="medium">Medium</option>
                                    <option value="strong">Strong</option>
                                    <option value="very_strong">Very Strong</option>
                                </select>
                                
                                <span id="fluorescence-error" class="invalid-feedback"></span>
                            </div>
                             
                            <div class="col-4 form-group">
                                <label for="length">Length</label>
                                <input type="text" class="form-control" name="length" id="length" placeholder="Enter Length">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="width">Width</label>
                                <input type="text" class="form-control" name="width" id="width" placeholder="Enter Width">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="depth">Depth</label>
                                <input type="text" class="form-control" name="depth" id="depth" placeholder="Enter Depth">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="table">Table</label>
                                <input type="text" class="form-control" name="table" id="table" placeholder="Enter Table">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-12">
                                <label for="terms">Terms</label>
                                <textarea class="form-control rounded-0" name="terms" id="terms" rows="3" placeholder="Add additional information"></textarea>
                                <span id="terms-error" class="invalid-feedback"></span>
                              </div>
                              
                              <div class="col-12">
                                <label for="remarks">Remarks</label>
                                <textarea class="form-control rounded-0" name="remarks" id="remarks" rows="3" placeholder="Add additional information"></textarea>
                                <span id="remarks-error" class="invalid-feedback"></span>
                              </div>
                              

            
`;
        } else if(diamond_category === 'single_non_certified') {
            additionalFields.innerHTML = `
             <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Clarity</label>
                                <select class="custom-select rounded-0"  name="stone_clarity" id="stone_clarity">
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
                            <div class="col-4 form-group">
                                <label for="shape">Carat</label>
                                <input type="text" class="form-control" name="stone_carat" id="stone_carat" placeholder="Enter Carat">
                                <span id="stone_carat-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Natts</label>
                                <select class="custom-select rounded-0" name="natts" id="natts">
                                  <option value="yes">Yes</option>
                                  <option value="no">No</option>
                                </select>
                                <span id="natts-error" class="invalid-feedback"></span>
                              </div>
                              
                            
                              <div class="col-4 form-group">
                                <label for="cut">Cut</label>
                                <select class="custom-select rounded-0" name="cut" id="cut">
                                    <option value="3EX">3EX</option>
                                    <option value="EX-">EX-</option>
                                    <option value="VG+">VG+</option>
                                    <option value="VG-">VG-</option>     
                                    <option value="Excellent">Excellent</option>
                                    <option value="Ideal">Ideal</option>
                                </select>
                                <span id="cut-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="polish">Polish</label>
                                <select class="custom-select rounded-0" name="polish" id="polish">
                                    <option value="3EX">3EX</option>
                                    <option value="EX-">EX-</option>
                                    <option value="VG+">VG+</option>
                                    <option value="VG-">VG-</option>     
                                    <option value="Excellent">Excellent</option>
                                    <option value="Ideal">Ideal</option>
                                </select>
                                <span id="polish-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="symmetry">Symmetry</label>
                                <select class="custom-select rounded-0" name="symmetry" id="symmetry">
                                    <option value="3EX">3EX</option>
                                    <option value="EX-">EX-</option>
                                    <option value="VG+">VG+</option>
                                    <option value="VG-">VG-</option>     
                                    <option value="Excellent">Excellent</option>
                                    <option value="Ideal">Ideal</option>
                                </select>
                                <span id="symmetry-error" class="invalid-feedback"></span>
                            </div>

                             <div class="col-4 form-group">
                                <label for="link">Link</label>
                                <input type="url" class="form-control" name="link" id="link" placeholder="Insert Link">
                                <span id="link-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="fluorescence">Fluorescence</label>
                                <select class="custom-select rounded-0" name="fluorescence" id="fluorescence">
                                    <option value="none">None</option>
                                    <option value="very_light">Very Light</option>
                                    <option value="faint_light">Faint/Light</option>
                                    <option value="medium">Medium</option>
                                    <option value="strong">Strong</option>
                                    <option value="very_strong">Very Strong</option>
                                </select>
                                
                                <span id="fluorescence-error" class="invalid-feedback"></span>
                            </div>
                             
                            <div class="col-4 form-group">
                                <label for="length">Length</label>
                                <input type="text" class="form-control" name="length" id="length" placeholder="Enter Length">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="width">Width</label>
                                <input type="text" class="form-control" name="width" id="width" placeholder="Enter Width">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="depth">Depth</label>
                                <input type="text" class="form-control" name="depth" id="depth" placeholder="Enter Depth">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="table">Table</label>
                                <input type="text" class="form-control" name="table" id="table" placeholder="Enter Table">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
             <div class="col-4">
                <label for="bgm">BGM</label>
                <select class="custom-select rounded-0" name="bgm" id="bgm">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <span id="bgm-error" class="invalid-feedback"></span>
            </div>
                    <div class="col-12">
                                <label for="terms">Terms</label>
                                <textarea class="form-control rounded-0" name="terms" id="terms" rows="3" placeholder="Add additional information"></textarea>
                                <span id="terms-error" class="invalid-feedback"></span>
                              </div>
                              
                              <div class="col-12">
                                <label for="remarks">Remarks</label>
                                <textarea class="form-control rounded-0" name="remarks" id="remarks" rows="3" placeholder="Add additional information"></textarea>
                                <span id="remarks-error" class="invalid-feedback"></span>
                              </div>
                                      
                            
            `;
        } else if (diamond_category === 'single_certified') {
            additionalFields.innerHTML = `
            <div class="col-4 form-group">
                        <label for="labSelection">Lab</label>
                        <select class="custom-select rounded-0" id="labSelection" name="lab">
                            <option value="">Select Option</option>
                            <option value="GIA">GIA</option>
                            <option value="IGI">IGI</option>
                            <option value="HRD">HRD</option>
                            <option value="AGS">AGS</option>
                            <option value="CGL">CGL</option>
                            <option value="DCLA">DCLA</option>
                            <option value="GCAL">GCAL</option>
                            <option value="GSI">GSI</option>
                            <option value="NGTC">NGTC</option>
                            <option value="PGS">PGS</option>
                            <option value="VGR">VGR</option>
                            <option value="RDR">RDR</option>
                            <option value="GHI">GHI</option>
                            <option value="IIDGR">IIDGR</option>
                            <option value="SGL">SGL</option>
                            <option value="GCI">GCI</option>
                            <option value="Other">other</option>
                        </select>
                        <span id="labSelection-error" class="invalid-feedback"></span>
                    </div>

             <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Clarity</label>
                                <select class="custom-select rounded-0"  name="stone_clarity" id="stone_clarity">
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
                            <div class="col-4 form-group">
                                <label for="shape">Carat</label>
                                <input type="text" class="form-control" name="stone_carat" id="stone_carat" placeholder="Enter Carat">
                                <span id="stone_carat-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Natts</label>
                                <select class="custom-select rounded-0" name="natts" id="natts">
                                  <option value="yes">Yes</option>
                                  <option value="no">No</option>
                                </select>
                                <span id="natts-error" class="invalid-feedback"></span>
                              </div>
                              
                            
                              <div class="col-4 form-group">
                                <label for="cut">Cut</label>
                                <select class="custom-select rounded-0" name="cut" id="cut">
                                    <option value="3EX">3EX</option>
                                    <option value="EX-">EX-</option>
                                    <option value="VG+">VG+</option>
                                    <option value="VG-">VG-</option>     
                                    <option value="Excellent">Excellent</option>
                                    <option value="Ideal">Ideal</option>
                                </select>
                                <span id="cut-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="polish">Polish</label>
                                <select class="custom-select rounded-0" name="polish" id="polish">
                                    <option value="3EX">3EX</option>
                                    <option value="EX-">EX-</option>
                                    <option value="VG+">VG+</option>
                                    <option value="VG-">VG-</option>     
                                    <option value="Excellent">Excellent</option>
                                    <option value="Ideal">Ideal</option>
                                </select>
                                <span id="polish-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="symmetry">Symmetry</label>
                                <select class="custom-select rounded-0" name="symmetry" id="symmetry">
                                    <option value="3EX">3EX</option>
                                    <option value="EX-">EX-</option>
                                    <option value="VG+">VG+</option>
                                    <option value="VG-">VG-</option>     
                                    <option value="Excellent">Excellent</option>
                                    <option value="Ideal">Ideal</option>
                                </select>
                                <span id="symmetry-error" class="invalid-feedback"></span>
                            </div>

                             <div class="col-4 form-group">
                                <label for="link">Link</label>
                                <input type="url" class="form-control" name="link" id="link" placeholder="Insert Link">
                                <span id="link-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="fluorescence">Fluorescence</label>
                                <select class="custom-select rounded-0" name="fluorescence" id="fluorescence">
                                    <option value="none">None</option>
                                    <option value="very_slight">Very Slight</option>
                                    <option value="faint">Faint/Slight</option>
                                    <option value="medium">Medium</option>
                                    <option value="strong">Strong</option>
                                    <option value="very_strong">Very Strong</option>
                                </select>
                                
                                <span id="fluorescence-error" class="invalid-feedback"></span>
                            </div>
                             
                            <div class="col-4 form-group">
                                <label for="length">Length</label>
                                <input type="text" class="form-control" name="length" id="length" placeholder="Enter Length">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="width">Width</label>
                                <input type="text" class="form-control" name="width" id="width" placeholder="Enter Width">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="depth">Depth</label>
                                <input type="text" class="form-control" name="depth" id="depth" placeholder="Enter Depth">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>

                            <div class="col-4 form-group">
                                <label for="table">Table</label>
                                <input type="text" class="form-control" name="table" id="table" placeholder="Enter Table">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
            <div class="col-4">
                <label for="bgm">BGM</label>
                <select class="custom-select rounded-0" name="bgm" id="bgm">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <span id="bgm-error" class="invalid-feedback"></span>
            </div>
            <div class="col-12">
                                <label for="terms">Terms</label>
                                <textarea class="form-control rounded-0" name="terms" id="terms" rows="3" placeholder="Add additional information"></textarea>
                                <span id="terms-error" class="invalid-feedback"></span>
                              </div>
                              
                              <div class="col-12">
                                <label for="remarks">Remarks</label>
                                <textarea class="form-control rounded-0" name="remarks" id="remarks" rows="3" placeholder="Add additional information"></textarea>
                                <span id="remarks-error" class="invalid-feedback"></span>
                              </div>
                              
            `;
        }
    
}
