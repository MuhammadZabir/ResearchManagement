# ResearchManagement

## Welcome everyone to the Research Management project. Entirely this is for CS727 from UiTM Shah Alam.

Tools need to download:
- MariaDB 10.x or MySQL 5.x
- Any Text Editor (recommend Visual Code Studio) for front end.
- Netbeans and Eclipse for pure PHP.
- MySQL Workbench or HeidiSQL (For easier database management)

First Step: Download Project
- Download the project using git command or directly download from the web as a zip file.
- If git command, the Netbeans or Eclipse able to run it. $ git clone https://github.com/MuhammadZabir/ResearchManagement.git
- If you download it as zip file, extract it in a appropriate location.

Second Step: Construct Database
- Download your choice of database. Technically both are the same no issue. I had tried both.
- Install it into your environment. Make your default username/password as root/root.
- Go to <projectfolder>/artifacts/database and import in Dump20171025.sql into the database to build your structure.

Third Step: Run
- Run cmd or terminal.
- Run the command $ cd <projectfolder>/bin. P.S: <projectfolder> refers to directory for your project path.
- Run the command $ cake server.
- Open browser and go to http://localhost:8765.

### Warn
Do not ever push anything related to <projectfolder>/config and <projectfolder>/vendor and <projectfolder>/src/Model/Table

For further information regarding your modules please do refer to <projectfolder>/artifacts/Reference.
Any enquiries do ask your team lead or me.

-Zabir-