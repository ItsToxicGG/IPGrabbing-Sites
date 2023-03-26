# IPGrabbing-Sites
IPGrabbingSites
# SQL-Code

RickRoll:
```sql
CREATE TABLE visitors (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(30) NOT NULL,
    visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

Dating-2-Tables:
```sql
CREATE TABLE names (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    person_name VARCHAR(30) NOT NULL,
    dating_person_name VARCHAR(30) NOT NULL
)
```
```sql
CREATE TABLE ips (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(50) NOT NULL
);
```

# Notice
All these websites uses mysql so pls check all files for mysql connections before use!

The only websites which have a more files are Dating & Minecraft

Made using JS, HTML, PHP