<?php
use Carbon\Carbon;

/* 日付をフォーマット */
function formatDate($date)
{
  return Carbon::parse($date)->format('n/j');
}

/* assetのバージョン出力 */
function version()
{
  return '?ver=' . date('Y-m-d_H');
}