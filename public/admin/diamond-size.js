function updateSizeOptions() {
    const sizeType = document.getElementById('sizeType').value;
    const sizeOptionContainer = document.getElementById('sizeOptionContainer');
    let sizeOptions = '';

    if (sizeType === 'general') {
        sizeOptions = `
        <div class="col-4 form-group ">
            <label for="generalSize">General Size</label>
            <select class="custom-select rounded-0" id="generalSize" name="generalSize">

                <option value=""></option>
                <option value="-2">-2</option>
                <option value="star">Star (+2 - 6.5)</option>
                <option value="melee">Melee (+6.5 - 11)</option>
                <option value="+11">+11</option>
                <option value="+14">+14</option>
                <option value="1/5">1/5</option>
                <option value="1/4">1/4</option>
                <option value="1/3">1/3</option>
                <option value="3/8">3/8</option>
                <option value="1/2">1/2</option>
                <option value="3/4">3/4</option>
                <option value="4/4">4/4</option>
                <option value="-0.45">-0.45</option>
                <option value="+0.45">+0.45</option>
                <option value="-0.95">-0.95</option>
                <option value="+0.95">+0.95</option>
            </select>
             </div>
        `;
    } else if (sizeType === 'sieve') {
        sizeOptions = `
            <label for="sieveSize">Sieve Size</label>
            <select class="custom-select rounded-0" id="sieveSize" name="sieveSize">
                
                    <option value=""></option>
                    <option value="0000">0000</option>
                    <option value="000">000</option>
                    <option value="00">00</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="1.5">1.5</option>
                    <option value="2">2</option>
                    <option value="2.5">2.5</option>
                    <option value="3">3</option>
                    <option value="3.5">3.5</option>
                    <option value="4">4</option>
                    <option value="4.5">4.5</option>
                    <option value="5">5</option>
                    <option value="5.5">5.5</option>
                    <option value="6">6</option>
                    <option value="6.5">6.5</option>
                    <option value="7">7</option>
                    <option value="7.5">7.5</option>
                    <option value="8">8</option>
                    <option value="8.5">8.5</option>
                    <option value="9">9</option>
                    <option value="9.5">9.5</option>
                    <option value="10">10</option>
                    <option value="10.5">10.5</option>
                    <option value="11">11</option>
                    <option value="11.5">11.5</option>
                    <option value="12">12</option>
                    <option value="12.5">12.5</option>
                    <option value="13">13</option>
                    <option value="13.5">13.5</option>
                    <option value="14">14</option>
                    <option value="14.5">14.5</option>
                    <option value="15">15</option>
                    <option value="15.5">15.5</option>
                    <option value="16">16</option>
                    <option value="16.5">16.5</option>
                    <option value="17">17</option>
                    <option value="17.5">17.5</option>
                    <option value="18">18</option>
                    <option value="18.5">18.5</option>
                    <option value="19">19</option>
                    <option value="19.5">19.5</option>
                    <option value="20">20</option>
                    <option value="20.5">20.5</option>
                    <option value="21">21</option>
            </select>
        `;
    }

    // Inject the size options into the container
    sizeOptionContainer.innerHTML = sizeOptions;
}
