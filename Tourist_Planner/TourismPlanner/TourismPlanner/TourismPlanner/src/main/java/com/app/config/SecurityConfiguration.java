	package com.app.config;

import org.springframework.context.annotation.Configuration;
import org.springframework.web.servlet.config.annotation.CorsRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;

@Configuration
public class SecurityConfiguration implements WebMvcConfigurer{

@Override
    public void addCorsMappings(CorsRegistry registry)
{
        registry.addMapping("/**")
              .allowedOrigins("http://localhost:3000") // Allow requests from this origin
              .allowedMethods("GET", "POST", "PUT", "DELETE") // Allowed HTTP methods
              .allowedHeaders("*"); // Allowed headers
    }
}
