<!DOCTYPE html>
<html>

<head>
	<title>BOOK REGISTRATION FORM</title>
	<style>
		body::before {
        content: ' ';
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        opacity: 0.45;
        background-image: url("https://i.pinimg.com/originals/42/32/8d/42328d58dc7490bff34e62598df9e848.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
      	}
		 /* body {
			background-color: #d5f4e6;
		}  */

		#addform {
			border: 1px solid black;
			margin: 0% 30%;
			padding: 20px;
			border-radius: 5px;
			position: relative;
			background-color: #FFA07A;

		}

		input,
		select {
			width: 100%;
			padding: 4px;
			border-radius: 2px;
			margin: 3px;
			border: none;
		}

		h2 {
			text-align: center;
			margin: 0%;
			padding: 10px;
			color:#33006F;

		}

		span {
			color: red;
		}
		#register{
			width: 30%;
			background-color:#9e1b32;
			padding: 7px 20px;
			border: none;
			margin-left: 35%;
			font-size: 16px;
			color:white;
		}
	</style>
</head>

<body>

	
	<form method="POST">
		<div id="addform">
			<h2>BOOK REGISTRATION FORM</h2>
			<!-- BookNumber:
				  <input type="text"  id="bookNumber" name="bookNumber" placeholder="Book Number"><br><br>
				  <span id="error_bookNumber"></span><br> -->
			BookName:
			<input type="text" id="bookName" name="bookName" placeholder="Book Name"><br>
			<span id="error_bookName"></span><br>
			Author:
			<input type="text" id="author" name="author" placeholder="Author Name"><br>
			<span id="error_author"></span><br>
			Published Year:
			<select id="publishedYear" name="publishedYear">
				<option value="">select year</option>
				<option value="1940">1940</option>
				<option value="1941">1941</option>
				<option value="1942">1942</option>
				<option value="1943">1943</option>
				<option value="1944">1944</option>
				<option value="1945">1945</option>
				<option value="1946">1946</option>
				<option value="1947">1947</option>
				<option value="1948">1948</option>
				<option value="1949">1949</option>
				<option value="1950">1950</option>
				<option value="1951">1951</option>
				<option value="1952">1952</option>
				<option value="1953">1953</option>
				<option value="1954">1954</option>
				<option value="1955">1955</option>
				<option value="1956">1956</option>
				<option value="1957">1957</option>
				<option value="1958">1958</option>
				<option value="1959">1959</option>
				<option value="1960">1960</option>
				<option value="1961">1961</option>
				<option value="1962">1962</option>
				<option value="1963">1963</option>
				<option value="1964">1964</option>
				<option value="1965">1965</option>
				<option value="1966">1966</option>
				<option value="1967">1967</option>
				<option value="1968">1968</option>
				<option value="1969">1969</option>
				<option value="1970">1970</option>
				<option value="1971">1971</option>
				<option value="1972">1972</option>
				<option value="1973">1973</option>
				<option value="1974">1974</option>
				<option value="1975">1975</option>
				<option value="1976">1976</option>
				<option value="1977">1977</option>
				<option value="1978">1978</option>
				<option value="1979">1979</option>
				<option value="1980">1980</option>
				<option value="1981">1981</option>
				<option value="1982">1982</option>
				<option value="1983">1983</option>
				<option value="1984">1984</option>
				<option value="1985">1985</option>
				<option value="1986">1986</option>
				<option value="1987">1987</option>
				<option value="1988">1988</option>
				<option value="1989">1989</option>
				<option value="1990">1990</option>
				<option value="1991">1991</option>
				<option value="1992">1992</option>
				<option value="1993">1993</option>
				<option value="1994">1994</option>
				<option value="1995">1995</option>
				<option value="1996">1996</option>
				<option value="1997">1997</option>
				<option value="1998">1998</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
			</select><br>
			<span id="error_year"></span><br>

			Copies Available:
			<input type="number" name="copies" id="copies" minlength="1" maxlength="4"
				placeholder="Copies Available"><br>
			<span id="error_copies"></span><br>

			Cost:
			<input type="number" name="cost" id="cost" minlength="2" maxlength="4" placeholder="Cost"><br>
			<span id="error_cost"></span><br>

			Description:
			<textarea name="description" id="description" cols="69" rows="3" placeholder="Some text.."></textarea> <br>
			<span id="error_description"></span><br>

			<input type="submit" id="register" value="submit"><br><br>
		</div>

	</form>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#register").click(function () {


				var bookName = $("#bookName").val();
				var author = $("#author").val();
				var publishedYear = $("#publishedYear").val();
				var copies = $("#copies").val();
				var cost = $("#cost").val();
				var description = $("#description").val();

				var regexBookName = /^[a-zA-Z ]{2,30}$/;
				var regexAuthorName = /^[a-zA-Z ]{2,30}$/;
				var regexCopies = /^[0-9]{1,4}$/;
				var regexCost = /^[0-9]{2,4}$/;


				//book name validation

				if (bookName == "" || bookName == null) {
					$("#error_bookName").html("Book Name should not be empty");
					return false;
				}
				else if (!regexBookName.test(bookName)) {
					$("#error_bookName").html("numbers and special characters are not allowed");
					return false;
				}
				else {
					$("#error_bookName").html('');
				}

				//author name validation

				if (author == "" || author == null) {
					$("#error_author").html("Author Name should not be empty");
					return false;
				}
				else if (!regexAuthorName.test(author)) {
					$("#error_author").html("numbers and special characters are not allowed");
					return false;
				}
				else {
					$("#error_author").html('');
				}

				//published year validation

				if (publishedYear == "" || publishedYear == null) {
					$("#error_year").html("select published year");
					return false;
				}
				else {
					$("#error_year").html('');
				}

				//copies validation

				if (copies == "" || copies == null) {
					$("#error_copies").html("copies available should not be 0");
					return false;
				}
				else if (!regexCopies.test(copies)) {
					$("#error_copies").html("copies should not exceed 9999");
					return false;
				}
				else {
					$("#error_copies").html('');
				}

				//cost validation

				if (cost == "" || cost == null) {
					$("#error_cost").html("enter cost");
					return false;
				}
				else if (!regexCost.test(cost)) {
					$("#error_cost").html("cost should be greater than Rs.9 and less than Rs.10000");
					return false;
				}
				else {
					$("#error_cost").html('');
				}

				$.ajax({
					type: "post",
					url: "?rt=book/book_record",
					dataType:"JSON",
					data: {bookName: bookName, author: author, publishedYear: publishedYear, copies: copies, cost: cost, description: description },

					async: false,
					success: function (response) {
						// alert(response);
						if (response["status"] == "true") {
							
							window.location.href = "index.php?rt=book/booklist";
							alert(response['message']);
							
						}
						else {
							alert("Book Register Unsuccessfully");
						}
					}
				})
			})
		})			  
	</script>
</body>

</html>