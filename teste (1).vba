Public Sub Limpa_Valores()
    shtOS.Unprotect "gabriel" 'Desproteger Planilha
        Application.ScreenUpdating = False 'Agiliza preenchimento
            shtOS.Cells(10, 2).Value = ""
            shtOS.Cells(15, 12).Value = ""
            shtOS.Cells(13, 2).Value = ""
            shtOS.Cells(15, 2).Value = ""
            shtOS.Cells(17, 12).Value = ""
            shtOS.Cells(5, 8).Value = ""
            shtOS.Cells(2, 39).Value = ""
            shtOS.Cells(8, 8).Value = ""
            shtOS.Cells(17, 2).Value = ""
            shtOS.Cells(21, 2).Value = ""
            shtOS.Cells(21, 12).Value = ""
            shtOS.Cells(19, 12).Value = ""
            shtOS.Cells(19, 2).Value = ""
            shtOS.Cells(8, 2).Value = ""
            shtOS.Cells(8, 3).Value = ""
            shtOS.Cells(8, 4).Value = ""
            shtOS.Cells(16, 17).Value = ""
            shtOS.Cells(23, 12).Value = ""
            shtOS.Cells(19, 17).Value = ""
            shtOS.Cells(67, 5).Value = ""
            shtOS.Cells(67, 17).Value = ""
            Range("B32:AC81").Select
            Selection.ClearContents
            Range("AF32:AJ81").Select
            Selection.ClearContents
            Range("An1:An123").Select
            Selection.ClearContents
            Range("A1").Select
            shtOS.ImgPeca.Picture = Nothing
    '        ActiveSheet.PageSetup.PrintArea = "$A$1:$Aj$66" 'Selecionar área de impressão
            Application.ScreenUpdating = True 'Agiliza preenchimento
    shtOS.Protect "gabriel" 'Desproteger Planilha
End Sub
Public Sub Consultar_Chapas()

    'Declara as variáveis---------------------------------------------
    Dim DB As DAO.Database
    Dim RS As DAO.Recordset
    Dim StrSQL As String
    Dim i As Integer

    'Abrir banco de dados---------------------------------------------
    'Set DB = DAO.OpenDatabase("\\10.135.159.6\Sistemas\Base\estamp.mdb")
    Set DB = DAO.OpenDatabase(ThisWorkbook.Path + "\Base\estamp.mdb")
    '-----------------------------------------------------------------
    'Contar numero de linhas------------------------------------------
    Set CelulaAtual = Worksheets("OS Ferr.").Range("AF32")

    IntLinhas = 0
    Do While Not IsEmpty(CelulaAtual)
        Set ProximaCelula = CelulaAtual.Offset(1, 0)
        Set CelulaAtual = ProximaCelula
        IntLinhas = IntLinhas + 1
    Loop

    If IntLinhas = 0 Then
    Range("AG32:AI66").Select
    Selection.ClearContents
    shtOS.Cells(1, 1).Select
    Else
    
    For i = 0 To IntLinhas - 1

    'Consultar chapas--------------------------------------------------
    'Set DB = DAO.OpenDatabase("\\10.135.159.6\Sistemas\Base\sap.mdb")
    Set DB = DAO.OpenDatabase(ThisWorkbook.Path + "\Base\sap.mdb")

    StrSQL = "SELECT * FROM sap where chapa=" & shtOS.Cells(32 + i, 32).Value
        Set RS = DB.OpenRecordset(StrSQL)
    If RS.RecordCount <> 0 Then
        While Not RS.EOF
            shtOS.Cells(32 + i, 33).Value = RS.Fields("nome")
        RS.MoveNext
        Wend
    End If
    Next i
    End If
    

    'Fechar recorset e database----------------------------------------
    DB.Close
    Set RS = Nothing
    Set DB = Nothing
End Sub



Private Sub Gravar_Dados()
    'Declarar variaveis----------------------------------------
    Dim DB As DAO.Database
    Dim RS As DAO.Recordset
    Dim StrSQL As String

    'Abrir banco de dados---------------------------------------------
    'Set DB = DAO.OpenDatabase("\\10.135.159.6\Sistemas\Base\estamp.mdb")
    Set DB = DAO.OpenDatabase(ThisWorkbook.Path + "\Base\estamp.mdb")
    '-----------------------------------------------------------------

    'Adiciona registros-----------------------------------------------
    Set RS = DB.OpenRecordset("os_ficha_execucao")
    RS.AddNew
        RS!Status = 1
        RS!data_abert = lbdata
        RS!tipo = cbtipo
        RS!produto = cbproduto
        RS!ferramenta = cbferr
        RS!operacao = lboper
        RS!solicitante_chapa = txtchapasol
        RS!solicitante_nome = txtnomesol
        RS!anomalia = cbanomalia
        RS!descricao_detalhada = txtdescricao
    RS.Update

    'Finaliza e msgBox de finalização com sucesso---------------------
    MsgBox ("Os Aberta com Sucesso"), vbExclamation, "BUC - Manufatura Estamparia"
    cbtipo.Text = ""
    cbproduto.Text = ""
    cbferr.Text = ""
    lboper.Caption = ""
    txtchapasol.Value = ""
    txtnomesol.Value = ""
    cbanomalia.Text = ""
    txtdescricao.Value = ""
    ImgPeca.Picture = Nothing

    'Fechar recorset e database----------------------------------------
    RS.Close
    DB.Close
    Set RS = Nothing
    Set DB = Nothing

End Sub