package com.app.dto;

public class AdminDTO {

	private int id;
	private String username;
	private String email;
	private String password;
	private String mobilenumber;
	
	public AdminDTO() {
		super();
		// TODO Auto-generated constructor stub
	}

	public AdminDTO(int id, String username, String email, String password, String mobilenumber) {
		super();
		this.id = id;
		this.username = username;
		this.email = email;
		this.password = password;
		this.mobilenumber = mobilenumber;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public String getMobilenumber() {
		return mobilenumber;
	}

	public void setMobilenumber(String mobilenumber) {
		this.mobilenumber = mobilenumber;
	}
	
	
}
