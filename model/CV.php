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
                $rep="view/resources/stockCV/";
                $arr = explode('.', $pdfName);
                $ext = $arr[count($arr)-1];
                $query = $this->dbLink->prepare('INSERT INTO CV(idUser) VALUES("' . $_SESSION['nickname'] .'")');
                $query->execute();
                $selection = $this->dbLink->lastInsertId();

                move_uploaded_file($pdf, $rep . $selection. '.' . $ext);
                return true;
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

        public function checkPhoneValidity($phone)
        {
             if (!ctype_digit ($phone))
                 return false;
             if (strlen($phone) != 10)
                 return false;
             return true;
        }

        public function checkPostalValidity($postalcode)
        {
            if (!ctype_digit ($postalcode))
                return false;
            if ((strlen($postalcode) != 5) && (strlen($postalcode) != 6))
                return false;
            return true;
        }

        public function checkSecuValidity($secu)
        {
            if (!ctype_digit ($secu))
                return false;
            if (strlen($secu) != 15)
                return false;
            return true;
        }
    }