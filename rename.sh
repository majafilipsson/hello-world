i=1
while read -r line 
do
mv $line pic-$((I++)).jpg
done < lista.txt 
