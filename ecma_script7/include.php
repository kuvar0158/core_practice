<!-- example of ioncludes in ecma 7 -->
<script type="text/javascript">
	
	var party = ['vinode','shivani', 'rohan', 'kavita'];
	console.log(party);

	// party.includes('shivani');

	console.log(party.includes('shivani'));

	// <!-- example of ** in ecma 7 it is show 2 power of 5-->

	let poroduct = 2**5;

	console.log(poroduct);
</script>

is there any changes 

const file_data = req.body.shape_image;
  const mimetype = file_data.split(";")[0].split("/")[1];
  const base64data = file_data.replace(/^data:.*,/, "");

  if (file_data.includes("data:image/svg+xml;base64")) {
    image_file_path = "shape_image_" + new Date().getTime() + ".svg";
  }
  if (file_data.includes("data:image/jpeg;base64")) {
    console.log("this is jpeg images");
    image_file_path = "shape_image_" + new Date().getTime() + ".jpeg";
  }
  if (file_data.includes("data:image/png;base64")) {
    console.log("this is png images");
    image_file_path = "shape_image_" + new Date().getTime() + ".png";
  }
  // var base64data = file_data.replace("data:image/svg+xml;base64,", "");
  // image_file_path = "shape_image_" + new Date().getTime() + ".svg";
  fs.writeFile(userFiles + image_file_path, base64data, "base64", (err) => {
    if (err) {
      console.log(err);
      //  return ReE(res, err);
    } else {
      let shape_info = {
        name: req_param.name,
        shape_image: "/uploads/" + image_file_path,
      };
      Shape.create(shape_info);

      return ReS(res, { message: "Shape added successfully." });
    }
  });