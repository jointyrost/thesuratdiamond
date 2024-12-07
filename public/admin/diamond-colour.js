function updateColorCategory() {
    const category = document.getElementById('color_category').value;
    document.getElementById('dynamic_inputs').style.display = 'block';
    
    // Hide all inputs initially
    document.getElementById('d_to_z_input').style.display = 'none';
    document.getElementById('general_input').style.display = 'none';
    document.getElementById('fancy_inputs').style.display = 'none';
    document.getElementById('treated_input').style.display = 'none';

    // Show the relevant input based on the selected category
    switch (category) {
        case 'd_to_z':
            document.getElementById('d_to_z_input').style.display = 'block';
            break;
        case 'general':
            document.getElementById('general_input').style.display = 'block';
            break;
        case 'fancy':
            document.getElementById('fancy_inputs').style.display = 'block';
            break;
        case 'treated':
            document.getElementById('treated_input').style.display = 'block';
            break;
        default:
            document.getElementById('dynamic_inputs').style.display = 'none';
            break;
    }
}
