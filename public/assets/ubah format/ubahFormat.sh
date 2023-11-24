#!/bin/bash

# /mnt/d/kuliah/smt 5/rpl/proyek akhir/easyrent/public/assets/ubah format

for tc in $(ls *); do
	filename_without_extension=$(basename -- "$tc" | cut -f 1 -d '.')
	cp $tc $filename_without_extension.jpg
done
