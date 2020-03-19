<FORM action="prosestambah.php" method="POST" name="form_input_data" >
      <table width="760" border="0" align="center" cellpadding="0" cellspacing"0" bgcolor="#CCCCCC" >
			<tr height="46">
            <td width="10%"></td>
            <td width="25%"></td>
            <td width="65%"><font color=" blue" size="6"><b>Masukan Data Pelanggan Manual Admin<b></forn></td>
      </tr>

      <tr height="46">
        <td></td>
        <td><b>ID Member </b></td>
        <td><input type="text" name="id_member" size="35" maxlenght="12"/></td>
      </tr>
      <tr height="46">
        <td></td>
        <td><b>Nama Lengkap </b></td>
        <td><input type="text" name="nama_lengkap" size="50" maxlenght="30"/></td>
      </tr>
      <tr height="46">
        <td></td>
        <td><b>Jenis Kelamin </b></td>
        <td><SELECT NAME="jenis_kelamin">
            <option value="-">Jenis Kelamin-
            <option value="Laki-laki">Laki-laki
            <option value="Perempuan">Perempuan
            </SELECT></td>
        </tr>
        <tr height="46">
          <td></td>
          <td><b>Alamat Email </b> </td>
          <td><input type="text" name="email" size="50" maxlenght="30"/></td>
        </tr>
        <tr height="46">
          <td></td>
          <td><b>No HP </b></td>
          <td><input type="text" name="no_hp" size="25" maxlenght="15"/></td>
        </tr>
        <tr height="46">
          <td></td>
          <td><b>Password </b> </td>
          <td><input type="password" name="password" size="25" maxlenght="15"/></td>
        </tr>
        <tr height="46">
          <td></td>
          <td><b>Ketik Ulang Password </b> </td>
          <td><input type="password" name="password_ulang" size="25" maxlenght="15"/></td>
        </tr>
        <tr height="46">
          <td></td>
          <td><input type="submit" name="Submit" value="Submit" /></td>
          &nbsp
          <td><input type="reset" name="reset" value="Reset" /></td>&nbsp        </tr>
      </table>
	  <p>&nbsp;</p>
    </FORM>