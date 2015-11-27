function validateForm(form) {
	var temp = true;
	var string = "";
      if (form.username.value=='') {
        string += 'Username missing\n';
		temp = false;
      }
	  if (form.emailaddress.value=='') {
        string += 'Email missing\n';
		temp = false;
      }
	  if (form.password.value=='') {
        string += 'Password missing\n';
		temp = false;
      }
	  if (form.day.value=='0') {
        string += 'Day missing\n';
		temp = false;
      }
	  if (form.month.value=='0') {
        string += 'Month missing\n';
		temp = false;
      }
	  if (form.year.value=='0') {
        string += 'Year missing\n';
		temp = false;
      }
	  if (form.gender.value=='') {
        string += 'Gender missing\n';
		temp = false;
      }
	  if(!temp)
		alert(string);
      return temp;
    }