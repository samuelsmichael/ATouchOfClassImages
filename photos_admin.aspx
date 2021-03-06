﻿<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="photos_admin.aspx.cs" Inherits="ATouchOfClassImages.photos_admin" %>

<%@ Register src="PhotoManager.ascx" tagname="PhotoManager" tagprefix="uc1" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <asp:ScriptManager ID="ScriptManager1" runat="server">
    </asp:ScriptManager>
    <div>
        <uc1:PhotoManager ID="PhotoManager2" ImageDirectory="Artistic" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager3" ImageDirectory="ChopstickDress" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager10" ImageDirectory="commercial" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager4" ImageDirectory="Country" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager11" ImageDirectory="CupDress" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager5" ImageDirectory="Dance" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager6" ImageDirectory="dancegallery" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager7" ImageDirectory="Fashion" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager8" ImageDirectory="filmproduction" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager9" ImageDirectory="headshots" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager1" ImageDirectory="Italy" runat="server" />
    </div>
    <div>
        <uc1:PhotoManager ID="PhotoManager12" ImageDirectory="misc" runat="server" />
    </div>
    </form>
</body>
</html>
