var image_list = [
    
    {
        "title" : "blue ivy",
        "file" : "Blue.jpg"
    },
    {
        "title" : "Huey",
        "file" : "huey.jpg"
    },
	{
	    "title" : "Malcolm X",
        "file" : "MX.jpg"
	},
	{
	    "title" : "Muhammad Ali",
        "file" : "MAli.jpg"
	},
	{
	    "title" : "Beyonce(Formation)",
        "file" : "Formation.jpg"
	}
]

read_files(image_list);

function read_files(array) {
    var output = "";
    var x;
    output += '<select id="imgInput" name="image" onchange="update_img();">';
    for(x = 0; x < array.length; x++) {
	output += '<option value =' + x.toString() + '>' + array[x].title + '</option>';
    }
    output +='</select>';
    document.getElementById("images").innerHTML = output;
}

function show_image(title) {
    var output2 = "";
    output2 +='<img src="';
    output2 += image_list[title].file;
    output2 += '">';
    document.getElementById("show_image").innerHTML = output2;
}

function update_img() {
        var upd = document.getElementById('imgInput').value;
        show_image(upd);
}