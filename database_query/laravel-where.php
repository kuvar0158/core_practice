<?php
$getEmailId = User::find()->select('*')->where(['email' => $emailId])->andWhere(['not in', 'id', $userId])->all();

$getEeocSetting = CompanySetting::find()->where(['company_id'=> COMPANY_ID, 'record_type' => 'eeocDiversity'])->asArray()->one();