<?php
    class CVModel extends Model
    {
        public function checkPDFValidity($pdf, $pdfName){

            $pdfNameArray = explode('.', $pdfName);
            if($pdfNameArray[1]!='pdf')
                return false;
            $type = mime_content_type($pdf);
            if($type != 'application/pdf')
                return false;
            return true;
        }

        public function uploadPDF($pdf, $pdfName){

            $pdfSize = filesize($pdf);

            if($pdfSize>0)
            {
                $rename=rand(0,100000);
                $rep="view/resources/stockCV/";

                // " " -> "_"
                $pdfName = str_replace (" ", "_", $pdfName);

                // ä, â, à -> a
                $a = array("ä", "â", "à");
                $pdfName = str_replace ($a, "a", $pdfName);

                // é, è, ê, ë -> e
                $e = array("é", "è", "ê", "ë");
                $pdfName = str_replace ($e, "e", $pdfName);

                // ï, î -> i
                $i = array("ï", "î");
                $pdfName = str_replace ($i, "i", $pdfName);

                // ö, ô -> o
                $o = array("ö", "ô");
                $pdfName = str_replace ($o, "o", $pdfName);

                // û, ù, ü -> u
                $u = array("ù", "û", "ü");
                $pdfName = str_replace ($u, "u", $pdfName);

                list($nom, $ext) = explode(".", $pdfName);

                move_uploaded_file($pdf, $rep . $nom . '_' . $rename . '.' . $ext);
                return true;
            }
            else
            {
                return false;
            }
        }
    }