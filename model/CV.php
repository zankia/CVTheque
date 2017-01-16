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

                //TODO : Changer le traitement du nom du cv. Nom d'utilisateur = UTILISATEUR UNIQUE
            }
            else
            {
                return false;
            }
        }

        public function uploadUserInformation($nickname, $name, $firstName, $socialSecuNum, $mobile,
                                               $phone, $address, $postcode, $city, $activityDomain)
        {
            $query = $this->dbLink->prepare('UPDATE User SET name = :name, firstName = :firstName, socialSecuNum = :socialSecuNum,
                                              mobile = :mobile, phone = :phone, address = :address, postcode = :postcode,
                                              city = :city
                                              WHERE nickname = :nickname');
            $query->bindParam(':name', $name, PDO::PARAM_STR, 24);
            $query->bindParam(':firstName', $firstName, PDO::PARAM_STR, 24);
            $query->bindParam(':socialSecuNum', $socialSecuNum, PDO::PARAM_STR, 32);
            $query->bindParam(':mobile', $mobile, PDO::PARAM_STR, 10);
            $query->bindParam(':phone', $phone, PDO::PARAM_STR, 10);
            $query->bindParam(':address', $address, PDO::PARAM_STR, 64);
            $query->bindParam(':postcode', $postcode, PDO::PARAM_STR, 6);
            $query->bindParam(':city', $city, PDO::PARAM_STR, 38);
            $query->bindParam(':nickname', $nickname, PDO::PARAM_STR, 24);
            $query->execute();

        }
    }