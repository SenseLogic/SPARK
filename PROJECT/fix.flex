IncludeFiles .//*.b? .//*.sql .//*.ph? .//*.styl .//*.css .//*.svg .//*.bat .//*.sh .//*.txt .//*.xml
ExcludeFiles ./fix.*
ReadFiles
Edit label text
ReplaceText
    Spark Project
    Spark Project
ReplaceText
    spark-project.com
    spark-project.com
ReplaceText
    spark-project
    spark-project
ReplaceText
    spark_project
    spark_project
ReplaceText
    spark, project
    spark, project
ReplaceText
    ARTICLES
    ARTICLES
ReplaceText
    ARTICLE
    ARTICLE
ReplaceText
    Articles
    Articles
ReplaceText
    Article
    Article
ReplaceText
    articles
    articles
ReplaceText
    article
    article
ListChangedFiles
DumpChangedLines
MoveFiles

ExcludeFiles
IncludeFiles .gitignore
ReadFiles
Edit text
ReplaceText
    #/CODE/FRAMEWORK/*.ph?
    /CODE/FRAMEWORK/*.ph?
ReplaceText
    #/www/FRAMEWORK/*.*
    /www/FRAMEWORK/*.*
DumpChangedLines
WriteFiles

ExcludeFiles
IncludeFiles clean.bat
ReadFiles
Edit text
ReplaceText
    rem del /Q CODE\\FRAMEWORK\\*.ph?
    del /Q CODE\\FRAMEWORK\\*.ph?
DumpChangedLines
WriteFiles

ExcludeFiles
IncludeFiles clean.sh
ReadFiles
Edit text
ReplaceText
    #rm -fv CODE/FRAMEWORK/*.ph?
    rm -fv CODE/FRAMEWORK/*.ph?
DumpChangedLines
WriteFiles
