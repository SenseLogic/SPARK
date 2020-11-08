echo on
rem call npm install -g npm
rem call npm install -g stylus
git --version
dmd --version
go version
node --version
call npm --version
echo on
call stylus --version
echo on
pause
mkdir %UserProfile%\PROJECT
robocopy /MIR %cd%\TOOL %UserProfile%\PROJECT\TOOL
cd %UserProfile%\PROJECT
cd
dir
pause
cd TOOL
git clone https://github.com/senselogic/BASIL.git
git clone https://github.com/senselogic/CYCLONE.git
git clone https://github.com/senselogic/GENERIS.git
git clone https://github.com/senselogic/PHOENIX.git
git clone https://github.com/senselogic/RESYNC.git
git clone https://github.com/senselogic/SPARK.git
git clone https://github.com/senselogic/VISTA.git
call make.bat
pause
mkdir ..\SITE
mkdir ..\SITE\TEST
robocopy /MIR SPARK\PROJECT ../SITE/TEST/TEST_SITE
cd ..\SITE\TEST\TEST_SITE
call update.bat
cd DATABASE
call make.bat
cd ..\CODE
call make.bat
echo === Open localhost in a web browser ===
pause
